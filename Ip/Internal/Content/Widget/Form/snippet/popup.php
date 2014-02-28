<div class="ip">
    <div id="ipWidgetFormPopup" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><?php echo __('Form options', 'ipAdmin') ?></h4>
                </div>
                <div class="modal-body">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#ipWidgetFormPopup-fields" data-toggle="tab"><?php echo __('Fields', 'ipAdmin') ?></a></li>
                        <li><a href="#ipWidgetFormPopup-options" data-toggle="tab"><?php echo __('Options', 'ipAdmin') ?></a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="ipWidgetFormPopup-fields">
                            <div class="ipWidget_ipForm_container"></div>
                            <div class="hidden">
                                <div class="ipsFieldTemplate">
                                    <a href="#" class="ipsFieldMove"><?php _e('Move', 'ipAdmin') ?></a>
                                    <input type="text" class="ipsFieldLabel" name="label" value="" />
                                    <select class="ipsFieldType">
                                        <?php foreach($fieldTypes as $fieldType) { ?>
                                            <option value="<?php echo esc($fieldType['key']); ?>"><?php echo esc($fieldType['title']); ?></option>
                                        <?php } ?>
                                    </select>
                                    <input type="checkbox" class="ipsFieldRequired" />
                                    <a href="#" class="ipsFieldOptions"><?php _e('Options', 'ipAdmin') ?></a>
                                    <a href="#" class="ipsFieldRemove"><?php _e('Remove', 'ipAdmin') ?></a>
                                </div>
                            </div>
                            <button type="button" class="btn btn-default ipsFieldAdd"><?php _e('Add new', 'ipAdmin') ?></button>
                        </div>

                        <div class="tab-pane" id="ipWidgetFormPopup-options">
                            <div class="form-group type-textarea name-success">
                                <label><?php _e('Thank you message', 'ipAdmin'); ?></label>
                                <div class="ipWidgetFormSuccess ipsSuccess"><?php echo !empty($success) ? $success : ''; ?></div>
                            </div>
                            <?php echo $optionsForm; ?>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><?php _e('Cancel', 'ipAdmin') ?></button>
                    <button type="button" class="btn btn-primary ipsConfirm"><?php _e('Confirm', 'ipAdmin') ?></button>
                </div>
            </div>
        </div>
    </div>
    <div id="ipWidgetFormPopupOptions" class="ipsFieldOptionsPopup modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><?php echo __('Field options', 'ipAdmin') ?></h4>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><?php _e('Cancel', 'ipAdmin') ?></button>
                    <button type="button" class="btn btn-primary ipsConfirm"><?php _e('Confirm', 'ipAdmin') ?></button>
                </div>
            </div>
        </div>
    </div>

</div>