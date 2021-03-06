<?php if ($skipRender): ?>
<?php elseif ($downloadUrl): ?>
  <?php if ($os === OS::OS_ANDROID): ?>
        <a
                class="button button--google-play"
                data-analytics-action="Download"
                data-analytics-category="Sign Up"
                data-analytics-label="<?php echo $analyticsLabel ?>"
                data-facebook-track="1"
                href="<?php echo $downloadUrl ?>"
                title="Download our app"
        >Download</a>

        <a
                class="button button--fdroid"
                data-analytics-action="Download"
                data-analytics-category="Sign Up"
                data-analytics-label="<?php echo $analyticsLabel ?>"
                data-facebook-track="1"
                href="https://f-droid.org/en/packages/io.lbry.browser/"
                title="Download on F-droid"
        >Download</a>
  <?php elseif ($os === OS::OS_IOS): ?>
        <a
                class="button button--apple-store"
                data-analytics-action="Download"
                data-analytics-category="Sign Up"
                data-analytics-label="<?php echo $analyticsLabel ?>"
                data-facebook-track="1"
                href="<?php echo $downloadUrl ?>"
                title="Download our app"
        >Download</a>
  <?php else: ?>
    <?php if ($isDownload): ?>
      <a class="button button--<?php echo $buttonStyle?>"
        download
        href="<?php echo $downloadUrl ?>"
        id="get-download-btn"
        data-analytics-category="Sign Up"
        data-analytics-action="Download"
        data-analytics-label="<?php echo $analyticsLabel ?>"
        title="Download LBRY App"
      ><?php echo $buttonLabel ?></a>
    <?php else: ?>
      <a class="button button--<?php echo $buttonStyle?>"
         href="<?php echo $downloadUrl ?>"
         id="get-download-btn"
         title="Download LBRY App"
      ><?php echo $buttonLabel ?></a>
    <?php endif ?>
  <?php endif ?>

  <?php if ($isAuto): ?>
    <?php js_start() ?>
    const anchor = document.getElementById('get-download-btn'); ga('send', 'event', anchor.getAttribute('data-analytics-category'), anchor.getAttribute('data-analytics-action'), anchor.getAttribute('data-analytics-label')); setTimeout(function() { window.location = anchor.getAttribute('href'); }, 500);
    <?php js_end() ?>
  <?php endif ?>
<?php else: ?>
  <a href="/get" class="button button--<?php echo $buttonStyle ?>">Download</a>
<?php endif ?>
