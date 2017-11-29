<?php
class LBCUModuleClass extends FLBuilderModule {

    public function __construct()
    {
        parent::__construct(array(
            'name'            => __( 'Members List Module', 'fl-builder' ),
            'description'     => __( '', 'fl-builder' ),
            'category'        => __( 'Advanced Modules', 'fl-builder' ),
            'dir'             => LBCU_MODULES_DIR . 'module/',
            'url'             => LBCU_MODULES_URL . 'module/',
            'editor_export'   => true, // Defaults to true and can be omitted.
            'enabled'         => true, // Defaults to true and can be omitted.
            'partial_refresh' => false, // Defaults to false and can be omitted.
        ));
    }

}
FLBuilder::register_module( 'LBCUModuleClass', LBCUSettings::get_settings() );
