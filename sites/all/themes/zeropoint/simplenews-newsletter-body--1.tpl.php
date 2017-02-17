<?php

/**
 * @file
 * Default theme implementation to format the simplenews newsletter body.
 *
 * Copy this file in your theme directory to create a custom themed body.
 * Rename it to override it. Available templates:
 *   simplenews-newsletter-body--[tid].tpl.php
 *   simplenews-newsletter-body--[view mode].tpl.php
 *   simplenews-newsletter-body--[tid]--[view mode].tpl.php
 * See README.txt for more details.
 *
 * Available variables:
 * - $build: Array as expected by render()
 * - $build['#node']: The $node object
 * - $title: Node title
 * - $language: Language code
 * - $view_mode: Active view mode
 * - $simplenews_theme: Contains the path to the configured mail theme.
 * - $simplenews_subscriber: The subscriber for which the newsletter is built.
 *   Note that depending on the used caching strategy, the generated body might
 *   be used for multiple subscribers. If you created personalized newsletters
 *   and can't use tokens for that, make sure to disable caching or write a
 *   custom caching strategy implemention.
 *
 * @see template_preprocess_simplenews_newsletter_body()
 */
?>
<div>
<div style="width:20%; float: left; background-color: #fff;border-right: 5px solid #555;margin-left: 8px;font-family: Helvetica;">
<p><img alt="UUCH logo" src="sites/default/files/stackeduuchlogo250x136.jpg" style="width:90%;align: center;" /></p>

<div style="width: 90%;">
[view:newsletter_sidebar]
</div>
</div>

<div style="width: 75%;float: left; background-color: #eee;border-left: 2px solid #444;">
<p>[view:newsletter]</p>
</div>
</div>
