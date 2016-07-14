<div id="app-settings">
	<div id="app-settings-header">
		<button class="settings-button"
				data-apps-slide-toggle="#app-settings-content"
		></button>
	</div>
	<div id="app-settings-content">
		<label for="enable_rss"><?php p($l->t('API key'));?></label>
		<input id="apikey" type="text" value="<?php echo $_['keys']['apikey']; ?>" />

		<label for="enable_rss"><?php p($l->t('API secret'));?></label>
        <input id="apisec" type="text" value="<?php echo $_['keys']['apisec']; ?>" />

        <label for="enable_rss"><?php p($l->t('Access Token'));?></label>
        <input id="token" type="text" value="<?php echo $_['keys']['accesstoken']; ?>" />

        <label for="enable_rss"><?php p($l->t('	Access Token Secret'));?></label>
        <input id="tokensec" type="text" value="<?php echo $_['keys']['accesstokensec']; ?>" />
	</div>
</div>