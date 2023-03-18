<div class="content">
    <form action="" method="GET" class="form sessionForm">
        <div class="sessionForm-title">Текущий сеанс</div>
        <div class="element">
            <div class="icon">
                <img src="/public/icons/pc-icon.svg" alt="">
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
        <button class="close-all button interactive-element" name="del_all">Закрыть другие сессии</button>
    </form>


    <form action="" method="POST" class="form sessionForm">
        <div class="sessionForm-title">Другие сеансы</div>
        
        <?php
        if($vars['all'] != ''){
            for($i=0;$i< count($vars['all']); $i++){
                
                echo '
                <div class="element">
                    <div class="icon">
                        <img src="/public/icons/pc-icon.svg" alt="">
                    </div>
                    <div class="content">
                        <div class="os">'.$vars['all'][$i][4].'</div>
                        <div class="location">'.$vars['all'][$i][3].'</div>
                        <div class="other">
                            <div class="browser">'.$vars['all'][$i][5].'&nbsp·&nbsp</div>
                            <div class="time">'.date('j.n.Y в H:i', $vars['all'][$i][6]).'</div>
                        </div>
                    </div>
                </div>
                ';
            }
        }
        
        ?>
    </form>

    

    

</div>
