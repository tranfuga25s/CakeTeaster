<?php
echo $this->Html->css('CakeTeaster.bootstrap.min', ['block' => true]);
?>
<div class="row">
    <div class="col-sm-4">
        <div class="panel panel-default">
            <div class="panel-body">
                Test list
            </div>
            <div class="panel-heading"><h4>Options</h4></div>
            <div class="panel-body">
                <div class="form-group">
                    <label for='store_statistics'><i class='glyphicon glyphicon-equalizer'></i>Store Statistics</label>
                    <select id='store_statistics' name='store_statistics' class='form-control'>
                      <option value='0'>No</option>
                      <option value='1' <?php if ( $store_statistics ) echo "selected='selected'"; ?>>Yes</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for='create_snapshots'><i class='icon-camera'></i>Create Snapshots</label>
                    <select id='create_snapshots' name='create_snapshots' class="form-control">
                        <option value='0'>No</option>
                        <option value='1' <?php if ( $create_snapshots ) echo "selected='selected'"; ?>>Yes</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for='sandbox_errors'><i class='icon-exclamation-sign'></i> Sandbox Errors</label>
                    <select id='sandbox_errors' name='sandbox_errors' class='form-control'>
                      <option value='0'>No</option>
                      <option value='1' <?php if ( $sandbox_errors ) echo "selected='selected'"; ?>>Yes</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for='xml_configuration_file'><i class='icon-wrench'></i>XML Configuration File</label>
                    <select id='xml_configuration_file' name='xml_configuration_file' class="form-control">
                      <option value='0' selected='selected'>None</option>
                    <?php foreach ( $xml_configuration_files as $index => $xml_configuration_file ): ?>
                        <option value='<?=($index + 1);?>'><?=$xml_configuration_file;?></option>
                    <?php endforeach; ?>
                    </select>
                </div>
                <p class='help-block'>
                  Note that choosing an XML configuration file will cause VPU to ignore the tests selected above and use the tests specified in the XML file instead.
                </p>
            </div>
            <div class='panel-heading'>Display</div>
            <div class="form-group">
                <label for='sort'><i class='icon-tasks'></i>Sort</label>
                <select id='sort' class='form-control'>
                  <option value='Results (asc)'>Results (asc)</option>
                  <option value='Results (desc)'>Results (desc)</option>
                  <option value='Time (asc)'>Time (asc)</option>
                  <option value='Time (desc)'>Time (desc)</option>
                </select>
            </div>
            <div class="form-group">
        
                <span class='display-description'>
                  <i class='icon-eye-open'></i>
                  Show
                </span>
                <label for='display-failed'>
                  <input type='checkbox' id='display-failed' class='display-suite' value='1' checked='checked' data-target='failed' />
                  <abbr title='Failed'>F</abbr>
                </label>
                <label for='display-incomplete' class='checkbox'>
                  <input type='checkbox' id='display-incomplete' class='display-suite' value='1' checked='checked' data-target='incomplete' />
                  <abbr title='Incomplete'>I</abbr>
                </label>
                <label for='display-skipped' class='checkbox'>
                  <input type='checkbox' id='display-skipped' class='display-suite' value='1' checked='checked' data-target='skipped' />
                  <abbr title='Skipped'>Sk</abbr>
                </label>
                <label for='display-succeeded' class='checkbox'>
                  <input type='checkbox' id='display-succeeded' class='display-suite' value='1' checked='checked' data-target='succeeded' />
                  <abbr title='Succeeded'>Su</abbr>
                </label>
            </div>
            <div class="panel-footer text-center">
                <button type="submit" class="btn btn-primary">Run Tests</button>
            </div>
        </div>
    </div>
    <div id='test-output' class='col-sm-8'>
        Output for testings
    </div>
</div>