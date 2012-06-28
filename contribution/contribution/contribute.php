<?php
// overrides to the Contribution contribute view

queue_js('contribution-public-form');

$head = array('title' => 'Contribute',
              'bodyclass' => 'contribution');
head($head);
?>

<div id="primary" class="contribution">
<?php echo flash(); ?>
    <h1><?php echo $head['title']; ?></h1>
    <form method="post" action="" enctype="multipart/form-data">
        <fieldset id="contribution-item-metadata">
            <div class="inputs">
                <label for="contribution-type">What type of item do you want to contribute?</label>
                <?php echo contribution_select_type('contribution_type', @$_POST['contribution_type'], array('id' => 'contribution-type')); ?>
                <input type="submit" name="submit-type" id="submit-type" value="Select" />
            </div>
            <div id="contribution-type-form">
            <?php if (isset($typeForm)): echo $typeForm; endif; ?>
            </div>
        </fieldset>
        <fieldset id="contribution-contributor-metadata" <?php if (!isset($typeForm)) { echo 'style="display: none;"'; }?>>
            <legend>Contributor Information</legend>
            <div class="field">
                <label for="contributor-name">Name <span class="normal">(not required to be your real name)</span></label>
                <div class="inputs">
                    <div class="input">
                        <?php echo $this->formText('contributor-name', @$_POST['contributor-name'], array('class' => 'textinput')); ?>
                    </div>
                </div>
            </div>
            <div class="field">
                <label for="contributor-email">Email Address <span class="normal">(will not be shared)</span></label>
                <div class="inputs">
                    <div class="input">
                        <?php echo $this->formText('contributor-email', @$_POST['contributor-email'], array('class' => 'textinput')); ?>
                    </div>
                </div>
            </div>
        <?php
        foreach (contribution_get_contributor_fields() as $field) {
            echo $field;
        }
        ?>
        </fieldset>
        <fieldset id="contribution-confirm-submit" <?php if (!isset($typeForm)) { echo 'style="display: none;"'; }?>>
            <?php if(isset($captchaScript)): ?><div id="captcha" class="inputs"><?php echo $captchaScript; ?></div><?php endif; ?>
            <div class="inputs">
                <?php echo $this->formCheckbox('contribution-public', @$_POST['contribution-public'], null, array('1', '0')); ?>
                <?php echo $this->formLabel('contribution-public', 'Publish my contribution on the web.'); ?>
            </div>
            <p>In order to contribute, you must read and agree to the <a href="<?php echo uri('contribution/terms') ?>" target="_blank">Terms and Conditions.</a></p>
            <div class="inputs">
                <?php echo $this->formCheckbox('terms-agree', @$_POST['terms-agree'], null, array('1', '0')); ?>
                <?php echo $this->formLabel('terms-agree', 'I agree to the Terms and Conditions.'); ?>
            </div>
            <?php echo $this->formSubmit('form-submit', 'Contribute', array('class' => 'submitinput')); ?>
        </fieldset>
    </form>
</div>
<?php foot(); ?>

