        <?php
       $wgHooks['EditFormPreloadText'][] = array('prefill');


        function prefill(&$textbox, &$title) {
            $title_str = $title->getText();
            $textbox = "{{subst:raw:Wikipedia::$title_str}}";
            return FALSE;
        }
        ?>

