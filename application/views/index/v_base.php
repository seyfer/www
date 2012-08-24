<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <title><?=$site_name?> | <?=$title?></title>
    <meta content="text/html; charset=utf8" http-equiv="content-type">
    <?foreach ($styles as $file_style):?>
        <?=html::style($file_style)?>
    <?endforeach?>
    <?foreach ($scripts as $file_script):?>
        <?=html::script($file_script)?>
    <?endforeach?>
</head>

<body>
<center>
    <table align="center" border="0" width="990" cellpadding="10" class="maintbl">
    <thead>
        <tr>
            <th align="left" colspan="3">
                 <div id="header">
                      <?=$cart?>
                     <?=HTML::image('media/img/logo.png', array('align' => 'left'))?>
                     <br/>
                    <a href="/"><h1><?=$site_name?></h1></a>
                    <h3><?=$site_description?></h3>
                   
                   <div class="top_menu"><?=$top_menu?></div>
                </div>
                
            </th>
        </tr>
    </thead>
    <tbody>
        <tr valign="top">
            <!-- Левый блок-->
             <? if (isset($block_left)):?>
                <td width="230">
                    <? foreach ($block_left as $lblock):?>
                        <?=$lblock?>
                    <?endforeach?>
                </td>
            <?endif?>
            <!-- /Левый блок-->

            <!-- Центральный блок-->
            <? if (isset($block_center)):?>
                <td>
                    <h2><?=$page_title?></h2>
                    <? foreach ($block_center as $cblock):?>
                        <?=$cblock?>
                    <?endforeach?>
                </td>
            <?endif?>
            <!-- /Центральный блок-->


            <!-- Правый блок-->
             <? if (isset($block_right)):?>
                <td width="200">
                    <? foreach ($block_right as $rblock):?>
                        <?=$rblock?>
                    <?endforeach?>
                </td>
            <?endif?>
            <!-- /Правый блок-->
        </tr>
        <tr align="center">
            <td colspan="3" id="footer">Copyright</td>
        </tr>
    </tbody>
</table>
</center>
</body>