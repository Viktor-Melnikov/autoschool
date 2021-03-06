<?php defined('SYSPATH') or die('No direct script access.');

class Controller_WordTemplate extends Controller_Ajax
{

    public function before()
    {
        parent::before();
        require_once Kohana::find_file('vendor', 'PHPWord/PHPWord', 'php');
    }


    /**
     * метод добавляет данные в шаблон из формы на сайте - заявление.
     *
     * */

    public function action_zayavlenie()
    {
        $this->auto_render = false;

        $data = array();
        foreach ($_POST as $key => $value)
            $data[$key] = Security::xss_clean($value);

        $error = array();
        foreach ($data as $key => $value)
            if (empty($value)) {
                if ((Arr::get($_POST, 'toggleReg') === null && $key === 'vrem_reg') ||
                    (Arr::get($_POST, 'toggleReg') !== null && $key === 'adres_reg_po_pasporty'))
                    continue;
                $error[] = $key;
            }

        if (!empty($error))
            $this->ajax_msg($error, 'error');


        $PHPWord = new PHPWord();
        $path = APPPATH.'templates/zayavlenie/template.docx';

        if (is_readable($path))
            $document = $PHPWord->loadTemplate($path);
        else
            $this->ajax_msg('Файла шаблона нет и/или не читается', 'error');
        /**
         * ====================================
         * Формирование заявления
         * ====================================
         */
        /**
         * Левая сторона бланка
         */

       // $document->setValue('VU', '');
        $document->setValue('Fam', $data['familiya']);
        $document->setValue('Name', $data['imya']);
        $document->setValue('Otchestvo', $data['ot4estvo']);
        $document->setValue('DateBirth', $data['data_rojdeniya']);
        $document->setValue('Nationality', $data['grajdanstvo']);
        $document->setValue('PlaceBirth', $data['mesto_rojdeniya']);
        $document->setValue('AdresRegPoPasporty', $data['adres_reg_po_pasporty']);
        $document->setValue('VremReg', $data['vrem_reg']);
        $document->setValue('Seriya',$data['pasport_seriya']);
        $document->setValue('Nomer', $data['pasport_nomer']);
        $document->setValue('Vidacha', $data['pasport_data_vyda4i']);
        $document->setValue('PasportKemVydan', $data['pasport_kem_vydan']);
        $document->setValue('DomTel', $data['dom_tel']);
        $document->setValue('MobTel', $data['mob_tel']);
        $document->setValue('Obrazovanie', $data['obrazovanie']);
        $document->setValue('MestoRaboty',$data['mesto_raboty']);
        $document->setValue('About', $data['about']);


        $file = APPPATH.'output_blanks/zayavleniya/zayavlenie_'.date('d_m_Y_H_i_s').'.docx';
        $document->save($file);

        /**
         * ====================================
         * Формирование договора
         * ====================================
         */
        //$contract = $PHPWord->loadTemplate(APPPATH.'templates/zayavlenie/statement.docx');
        //@todo
        $this->ajax_msg(
            View::factory('main/blank/result', array(
                'statement' => URL::site('download/zayavleniya/zayavlenie_'.date('d-m-Y_H:i:s').'.docx'),
                'contract' => URL::site('download/contracts/contract_'.date('d-m-Y_H:i:s').'.docx'),
            ))->render()
        );

//        $this->template->content = View::factory('main/word');
    }


}

/* заголовки для скачивания файлов ворда
 header('Content-disposition: inline');
        header('Content-type: application/msword');
        readfile($file);
        exit;
 */

