<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Footer extends Composer 
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'sections.footer',
    ];

    /**
     * Data to be passed to the view.
     *
     * @return array
     */
    public function with(): array
    {
        return [
            'footer' => $this->footer(),
        ];
    }

    /**
     * Get footer ACF fields.
     *
     * @return array
     */
    protected function footer(): array
    {
        return [
            'text' => get_field('footer_text'),
        ];                               
    }
}