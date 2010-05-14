<?php
/**
 * Recommend view
 */

$project = $vars['project'];
$num_diggs = count_annotations($project->guid, "object", "plugin_project", "plugin_digg");
?>

<div id="recommend">
	<div id="num_recommend">
		<p><?php echo $num_diggs; ?></p>
	</div>
	<div id="recommend_action">
<?php
if (!already_dugg($project) && isloggedin()) {
	$url = "{$vars['url']}action/plugins/digg?guid={$project->guid}";
	$url = elgg_add_action_tokens_to_url($url);
	echo "<a href=\"{$url}\">Recommend</a>";
} else {
?>
		<p>Recommendations</p>
<?php
}
?>
	</div>
</div>