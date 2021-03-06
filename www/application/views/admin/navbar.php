<div class="navbar navbar-fixed-top navbar-inverse">
    <div class="navbar-inner">
        <div class="nav-collapse">
            <ul class="nav">
                <li><a href="<?=URL::site()?>"><i class="icon-home"></i> Главная</a></li>
                <li class="active"><a href="<?=URL::site('/admin')?>"><i class="icon-bar-chart"></i> Админка</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-th-list"></i> Щито-то<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?=URL::site('admin/papers')?>">Просмотр</a></li>
                        <li><a href="<?=URL::site('admin/google')?>">Google Upload</a></li>
                    </ul>
                </li>

                <li><a href="<?=URL::site('admin/mail')?>"><i class="icon-envelope"></i> Рассылка писем</a></li>
            </ul>
            <ul class="nav pull-right">
                <li class="divider-vertical"></li>
                <li style="position: relative">
                    <a href="#" id="user_name"><span class="login"><i class="icon-user"></i> <?=$session->get('first_name').' '.$session->get('last_name')?></span><strong class="caret" style="margin-left: 2px;margin-top: 8px;"></strong></a>
                    <div id="popup" class="hide">
                        <div class="pull-left">
                            <img class="img-login" style="width: 95px; height: 95px" src="<?=$session->get('photo')?>"/>
                        </div>
                        <div class="pull-right" style="width: 170px">
                            <span style="font-weight: bolder"">  <?=$session->get('first_name').' '.$session->get('last_name')?></span><br>
                            <span class="muted"><?=$session->get('email')?></span><br>
                            Администратор
                            <div class="buttons">
                                <a href="<?=URL::site('admin/settings')?>"><button class="btn">Настройки</button></a>
                                <a href="<?=URL::site('admin/auth/logout')?>"><button class="btn">Выйти</button></a>
                            </div>
                        </div>
                    </div>
                <li class="divider-vertical"></li>
                </li>
            </ul>
        </div><!-- /.nav-collapse -->
    </div><!-- /navbar-inner -->
</div><!-- /navbar -->

