<!DOCTYPE html>
<html lang="en" class="sticky-footer-html">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	{asset name="Head"}
</head>
<body id="{$BodyID}" class="{$BodyClass} sticky-footer-body">
	<div id="Frame">
		<div class="Head" id="Head">
			<div class="Row">
				<strong class="SiteTitle"><a href="{link path="/"}">{logo}</a></strong>
				<div class="SiteSearch">{searchbox}</div>
				<ul class="SiteMenu">
					<!-- {dashboard_link} -->
					{discussions_link}
					{activity_link}
					<!-- {inbox_link} -->
					{custom_menu}
					<!-- {profile_link}
					{signinout_link}  -->
				</ul>
			</div>
		</div>
		<div id="Body">
			<div class="Row">
				<div class="BreadcrumbsWrapper">{breadcrumbs}</div>
				<div class="Column PanelColumn" id="Panel">
					{module name="MeModule"}
					{asset name="Panel"}
				</div>
				<div class="Column ContentColumn" id="Content">{asset name="Content"}</div>
			</div>
		</div>
		<div id="Foot">
			<div class="Row">
				<a href="{vanillaurl}" class="PoweredByVanilla" title="Community Software by Vanilla Forums">Powered by Vanilla</a>
				{asset name="Foot"}
			</div>
		</div>
	</div>
	{event name="AfterBody"}
</body>
</html>