<div class="content">
    <form action="" method="GET" class="form sessionForm">
        <div class="sessionForm-title">Текущий сеанс</div>
        <div class="list">
            <?php $device = preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $vars['cur'][0][4]) ? 'phone' : 'pc'; ?>
            <div class="element" onclick="aboutShow('<?= $vars['cur'][0][3] ?>','<?= date('j.n.Y в H:i', $vars['cur'][0][7]) ?>','<?= date('j.n.Y в H:i', $vars['cur'][0][6]) ?>','<?= $vars['cur'][0][5] ?>','<?= $vars['cur'][0][2] ?>','<?= $vars['cur'][0][4] ?>','<?=$device?>', 'false')">
                <div class="icon">
                    <img src="/public/icons/<?=$device?>-icon.svg" alt="">
                </div>
                <div class="content">
                    <div class="os"><?=$vars['cur'][0][4]?></div>
                    <div class="location"><?=$vars['cur'][0][3]?></div>
                    <div class="other">
                        <div class="browser"><?=$vars['cur'][0][5]?>&nbsp·&nbsp</div>
                        <div class="time"><?=date('j.n.Y в H:i', $vars['cur'][0][6])?></div>
                    </div>
                </div>
            </div>
        </div>
        <button class="close-all button interactive-element" name="del_all">Закрыть другие сеансы</button>
    </form>

    <div class="form sessionForm">
        <div class="sessionForm-title">Активные сеансы</div>
        <div id="active" class="list">
            <?php
                for($i=0;$i < count($vars['all']); $i++){
                    if($vars['all'][$i][1] != 'Closed'){
                        $device = preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $vars['all'][$i][4]) ? 'phone' : 'pc';
                        
                        echo '
                        <div class="element" onclick="aboutShow(`'.$vars['all'][$i][3].'`, `'.date('j.n.Y в H:i', $vars['all'][$i][7]).'`, `'.date('j.n.Y в H:i', $vars['all'][$i][6]).'`, `'.$vars['all'][$i][5].'`, `'.$vars['all'][$i][2].'`, `'.$vars['all'][$i][4].'`, `'.$device.'`, `false`)">
                            <div class="icon">
                                <img src="/public/icons/'.$device.'-icon.svg" alt="">
                            </div>
                            <div class="content">
                                <div class="os">'.$vars['all'][$i][4].'</div>
                                <div class="location">'.$vars['all'][$i][3].'</div>
                                <div class="other">
                                    <div class="browser">'.$vars['all'][$i][5].'&nbsp·&nbsp</div>
                                    <div class="time">'.date('j.n.Y в H:i', $vars['all'][$i][6]).'</div>
                                </div>
                            </div>
                        </div>';
                    }   
                }

            ?>
            
        </div>
        <button class="button interactive-element" onclick="show('active')">Показать больше</button>
    </div>





    <div class="form sessionForm">
        <div class="sessionForm-title">Завершённые сеансы</div>
        <div id="closed" class="list">
        <?php
            for($i=0;$i < count($vars['all']); $i++){
                if($vars['all'][$i][1] == 'Closed'){
                    $device = preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $vars['all'][$i][4]) ? 'phone' : 'pc';
                    
                    echo '
                    <div class="element" onclick="aboutShow(`'.$vars['all'][$i][3].'`, `'.date('j.n.Y в H:i', $vars['all'][$i][7]).'`, `'.date('j.n.Y в H:i', $vars['all'][$i][6]).'`, `'.$vars['all'][$i][5].'`, `'.$vars['all'][$i][2].'`, `'.$vars['all'][$i][4].'`, `'.$device.'`, `true`)">
                        <div class="icon">
                            <img src="/public/icons/closed-'.$device.'-icon.svg" alt="">
                        </div>
                        <div class="content">
                            <div class="os">'.$vars['all'][$i][4].'</div>
                            <div class="location">'.$vars['all'][$i][3].'</div>
                            <div class="other">
                                <div class="browser">'.$vars['all'][$i][5].'&nbsp·&nbsp</div>
                                <div class="time">'.date('j.n.Y в H:i', $vars['all'][$i][6]).'</div>
                            </div>
                        </div>
                    </div>';
                }   
            }
        ?>
        </div>
        <button class="button interactive-element" onclick="show('closed')">Показать больше</button>
    </div>

    

    <div class="about" id="about" style="top: 100%; opacity: 0;">
        <div class="data">
            <div class="content">
                <div class="header">
                    <div class="content">
                        <div class="icon">
                            <img src="/public/icons/pc-icon.svg" alt="">
                        </div>
                        <div class="os">Windows</div>
                        <div class="time">20.03.2023 в 10:17</div>
                    </div>
                </div>
                <form action="" method="GET" class="body">
                    <div class="info">
                        <div class="location">
                            <div class="title">Место</div>
                            <div class="text">Moscow</div>
                        </div>
                        <div class="lastActive">
                            <div class="title">Последняя активность</div>
                            <div class="text">20.03.2023 в 10:20</div>
                        </div>
                        <div class="time">
                            <div class="title">Дата входа</div>
                            <div class="text">20.03.2023 в 10:17</div>
                        </div>
                        <div class="browser">
                            <div class="title">Браузер</div>
                            <div class="text">Chrome</div>
                        </div>
                        <div class="ip">
                            <div class="title">IP</div>
                            <div class="text">182.126.64.23</div>
                        </div>
                    </div>
                    <input type="hidden" name="sessionid" value="">
                    <button class="close-all button interactive-element" name="close">Завершить сессию</button>
                </form>
            </div>
            <div class="close" onclick="aboutShow()">
                <img src="/public/icons/close.svg" alt="">
            </div>
        </div>
    </div>
    

    

    

</div>
