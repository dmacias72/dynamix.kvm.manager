<?php
$domName = $lv->domain_get_name_by_uuid($uuid);
$xml = $lv->domain_get_xml($domName);
if ($_GET['readonly']) {
	$readonly = 'readonly';
	$method = "View";
	$type = "hidden";
	$return = "Back";
}
else {	
	$method = "Edit";
	$type = "submit";
	$return = "Cancel";
}
?>
<div>
	<form method="POST" id="editXML" action="?subaction=domain-create&uuid=<?=$uuid;?>" >
		<table class="tablesorter" style="margin-top:-33px"><thead><th colspan="2"><b><?=$method;?> Domain <?=$domName;?> XML Description</b></th></thead>
			<tr>
				<td>
					<textarea autofocus <?=$readonly?> name="xmldesc" rows="15" cols="100%"><?=$xml;?></textarea>
				</td>
			</tr>
			<tr>
				<td>
					<div>
						<input type="<?=$type;?>" value="Save">
						<button type="button" onclick="javascript:done()" ><?=$return?></button>
					</div>
				</td>
			</tr>
		</table>
	</form>
</div>