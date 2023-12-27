<?php

class AppController {
    protected function render(string $template = null) {
        $templatePath = 'public/html/'.$template.'.html';
        $output = 'FIle not found!';

        if (file_exists($templatePath)) {

            ob_start();
            include $templatePath;
            $output = ob_get_clean();
        }
        print($output);
    }
}

// class AppController {
//     protected function render(string $template = null, array $variables = [] ) {
//         $templatePath = 'public/html'.$template.'.html';
//         $output = 'FIle not found!';

//         if (file_exists($templatePath)) {
//             extract ($variables);

//             ob_start();
//             include $templatePath;
//             $output = ob_get_clean();
//         }
//         print($output);
//     }
// }