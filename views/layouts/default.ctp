<script type="text/javascript">
    function toggle1() {
        $("#options_container").toggle();
    }

    $(document).ready(function() {
        $("#options_toggle").click(alert('hello!'));

        $("#options_toggle").click(function() {
            $("#options_container").toggle();
            return false;
        });
    })
</script>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php echo $html->charset(); ?>
        <title>
            Haikubox
            <?php echo $title_for_layout; ?>
        </title>
        <?php echo $javascript->link('jquery-1.4.2.js'); ?>
        <?php echo $javascript->link('script.js'); ?>
        <?php
        echo $html->meta('icon');

        echo $html->css('cake.generic');
        echo $html->css('style');

        echo $scripts_for_layout;
        ?>
    </head>
    <body>
        <div id="container">
            <div id="header">
                <h4>Haikubox
                    <?=$html->link('List All',array('controller'=>'rows','action'=>'index'));?> |
                    <?php echo $html->link('Add New', array('controller'=>'rows','action' => 'add')); ?> |
                    <a href="mailto:support@mediatecpub.com">Feedback / Request Feature</a>
                </h4>
                <BR />
                <?=$form->create('Row',array('controller'=>'rows','action'=>'search'));?>
                <?=$form->input('search', array('label'=>false));?>

                <?=$form->submit('Search');?>
                <a onClick="toggle1();">Options</a>

                <div id="options_container">
                    <?=$form->input('search_service_name', array('type'=>'checkbox', 'checked'=>true));?>
                    <?=$form->input('search_host_url', array('type'=>'checkbox', 'checked'=>true));?>
                    <?=$form->input('search_username', array('type'=>'checkbox', 'checked'=>true));?>
                    <?=$form->input('search_passphrase', array('type'=>'checkbox', 'checked'=>true));?>
                    <?=$form->input('search_descr', array('type'=>'checkbox', 'checked'=>true));?>
                </div>

                <?=$form->end();?>

            </div>
            <div id="content">

                <?php $session->flash(); ?>

                <?php echo $content_for_layout; ?>

            </div>
            <div id="footer">
                <?php echo $html->link(
                $html->image('cake.power.gif', array('alt'=> __("CakePHP: the rapid development php framework", true), 'border'=>"0")),
                'http://www.cakephp.org/',
                array('target'=>'_blank'), null, false
                );
                ?>
            </div>
        </div>
        <?php echo $cakeDebug; ?>
    </body>
</html>