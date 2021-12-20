<?php

declare(strict_types=1);

namespace Modules\Amazon\Models\Panels;

//--- Services --
use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class HomePanel.
 *  forse meglio esterndere l'home panel di Xot?
 */
class HomePanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     */
    protected static string $model = 'Modules\Amazon\Models\Home';

    /**
     * The single value that should be used to represent the resource when being displayed.
     */
    public static string $title = 'title';

    /**
     * The columns that should be searched.
     */
    public static array $search = [];

    /**
     * The relationships that should be eager loaded on index queries.
     */
    public function with(): array {
        return [];
    }

    public function search(): array {
        return [];
    }

    /**
     * on select the option id.
     *
     * @return mixed
     */
    public function optionId(object $row) {
        return $row->area_id;
    }

    /**
     * on select the option label.
     */
    public function optionLabel(object $row): string {
        return $row->area_define_name;
    }

    /**
     * @return object[]
     */
    public function fields(): array {
        return [
            (object) [
                'type' => 'Id',
                'name' => 'id',
            ],
            (object) [
                'type' => 'Text',
                //'name' => 'post[title]',
                'name' => 'post.title',
                'col_bs_size' => 12,
            ],
            //*/
            (object) [
                'type' => 'Textarea',
                //'name' => 'post[subtitle]'
                'name' => 'post.subtitle',
                'except' => ['index'],
                'col_bs_size' => 12,
            ],
            (object) [
                'type' => 'Wysiwyg',
                //'name' => 'post[subtitle]'
                'name' => 'post.txt',
                'except' => ['index'],
                'col_bs_size' => 12,
            ],
            (object) [
                'type' => 'Image',
                'name' => 'icon_src',
            ],
        ];
    }

    /**
     * Get the actions available for the resource.
     *
     * @return array
     */
    public function actions():array {
        return [
            new Actions\TestAction(),
        ];
    }

    /**
     * @return bool
     */
    public function hasLang() {
        return true;
    }
}
