<?php

function colorize($color, $text) {

if ($color == 'black' or $color == '000000'){
	$text = "\033[38;5;001m $text \033[0m";
} else if ($color == 'maroon' or $color == '800000'){
	$text = "\033[38;5;001m $text \033[0m";
} else if ($color == 'japanese_laurel' or $color == '008000'){
	$text = "\033[38;5;002m $text \033[0m";
} else if ($color == 'olive' or $color == '808000'){
	$text = "\033[38;5;003m $text \033[0m";
} else if ($color == 'navy_blue' or $color == '000080'){
	$text = "\033[38;5;004m $text \033[0m";
} else if ($color == 'fresh_eggplant' or $color == '800080'){
	$text = "\033[38;5;005m $text \033[0m";
} else if ($color == 'teal' or $color == '008080'){
	$text = "\033[38;5;006m $text \033[0m";
} else if ($color == 'silver' or $color == 'c0c0c0'){
	$text = "\033[38;5;007m $text \033[0m";
} else if ($color == 'gray' or $color == '808080'){
	$text = "\033[38;5;008m $text \033[0m";
} else if ($color == 'red' or $color == 'ff0000'){
	$text = "\033[38;5;009m $text \033[0m";
} else if ($color == 'green' or $color == '00ff00'){
	$text = "\033[38;5;010m $text \033[0m";

} else if ($color == 'yellow' or $color == 'ffff00'){
	$text = "\033[38;5;011m $text \033[0m";
} else if ($color == 'blue' or $color == '0000ff'){
	$text = "\033[38;5;012m $text \033[0m";
} else if ($color == 'fuchsia' or $color == 'ff00ff'){
	$text = "\033[38;5;013m $text \033[0m";
} else if ($color == 'aqua' or $color == '00ffff'){
	$text = "\033[38;5;014m $text \033[0m";
} else if ($color == 'white' or $color == 'ffffff'){
	$text = "\033[38;5;015m $text \033[0m";
} else if ($color == 'black' or $color == '000000'){
	$text = "\033[38;5;016m $text \033[0m";
} else if ($color == 'stratos' or $color == '00005f'){
	$text = "\033[38;5;017m $text \033[0m";
} else if ($color == 'navy_blue' or $color == '000087'){
	$text = "\033[38;5;018m $text \033[0m";
} else if ($color == 'dark_blue' or $color == '0000af'){
	$text = "\033[38;5;019m $text \033[0m";
} else if ($color == 'dark_blue_2' or $color == '0000d7'){
	$text = "\033[38;5;20m $text \033[0m";

} else if ($color == '0000ff') {
	$text = "\033[38;5;021m $text \033[0m";
} else if ($color == '0000ff') {
	$text = "\033[38;5;022m $text \033[0m";
} else if ($color == '005f00') {
	$text = "\033[38;5;023m $text \033[0m";
} else if ($color == '005f5f') {
	$text = "\033[38;5;024m $text \033[0m";
} else if ($color == '005f87') {
	$text = "\033[38;5;025m $text \033[0m";
} else if ($color == '005faf') {
	$text = "\033[38;5;026m $text \033[0m";
} else if ($color == '005fd7') {
	$text = "\033[38;5;027m $text \033[0m";
} else if ($color == '005ff') {
	$text = "\033[38;5;028m $text \033[0m";
} else if ($color == '008700') {
	$text = "\033[38;5;029m $text \033[0m";

} else if ($color == '008787') {
	$text = "\033[38;5;030m $text \033[0m";
} else if ($color == '0087af') {
	$text = "\033[38;5;031m $text \033[0m";
} else if ($color == '0087d7') {
	$text = "\033[38;5;032m $text \033[0m";
} else if ($color == '0087ff') {
	$text = "\033[38;5;033m $text \033[0m";
} else if ($color == '00af00') {
	$text = "\033[38;5;034m $text \033[0m";
} else if ($color == '00af5f') {
	$text = "\033[38;5;035m $text \033[0m";
} else if ($color == '00af87') {
	$text = "\033[38;5;036m $text \033[0m";
} else if ($color == '00afaf') {
	$text = "\033[38;5;037m $text \033[0m";
} else if ($color == '00afd7') {
	$text = "\033[38;5;038m $text \033[0m";
} else if ($color == '00afff') {
	$text = "\033[38;5;039m $text \033[0m";

} else if ($color == '00d700') {
	$text = "\033[38;5;040m $text \033[0m";
} else if ($color == '00d75f') {
	$text = "\033[38;5;041m $text \033[0m";
} else if ($color == '00d787') {
	$text = "\033[38;5;042m $text \033[0m";
} else if ($color == '00d7af') {
	$text = "\033[38;5;043m $text \033[0m";
} else if ($color == '00d7d7') {
	$text = "\033[38;5;044m $text \033[0m";
} else if ($color == '00d7ff') {
	$text = "\033[38;5;045m $text \033[0m";
} else if ($color == '00ff00') {
	$text = "\033[38;5;046m $text \033[0m";
} else if ($color == '00ff5f') {
	$text = "\033[38;5;047m $text \033[0m";
} else if ($color == '00ff87') {
	$text = "\033[38;5;048m $text \033[0m";
} else if ($color == '00ffaf') {
	$text = "\033[38;5;049m $text \033[0m";

} else if ($color == '00ffd7') {
	$text = "\033[38;5;050m $text \033[0m";
} else if ($color == '00ffff') {
	$text = "\033[38;5;051m $text \033[0m";
} else if ($color == '5f000') {
	$text = "\033[38;5;052m $text \033[0m";
} else if ($color == '5f005f') {
	$text = "\033[38;5;053m $text \033[0m";
} else if ($color == '5f0087') {
	$text = "\033[38;5;054m $text \033[0m";
} else if ($color == '5f00af') {
	$text = "\033[38;5;055m $text \033[0m";
} else if ($color == '5f00d7') {
	$text = "\033[38;5;056m $text \033[0m";
} else if ($color == '5f00ff') {
	$text = "\033[38;5;057m $text \033[0m";
} else if ($color == '5f5f00') {
	$text = "\033[38;5;058m $text \033[0m";
} else if ($color == '5f5f5f') {
	$text = "\033[38;5;059m $text \033[0m";

} else if ($color == '5f5f87') {
	$text = "\033[38;5;060m $text \033[0m";
} else if ($color == '5f5faf') {
	$text = "\033[38;5;061m $text \033[0m";
} else if ($color == '5f5fd7') {
	$text = "\033[38;5;062m $text \033[0m";
} else if ($color == '5f5fff') {
	$text = "\033[38;5;063m $text \033[0m";
} else if ($color == '5f8700') {
	$text = "\033[38;5;064m $text \033[0m";
} else if ($color == '5f875f') {
	$text = "\033[38;5;065m $text \033[0m";
} else if ($color == '5f8787') {
	$text = "\033[38;5;066m $text \033[0m";
} else if ($color == '5f87af') {
	$text = "\033[38;5;067m $text \033[0m";
} else if ($color == '5f87d7') {
	$text = "\033[38;5;068m $text \033[0m";
} else if ($color == '5f87ff') {
	$text = "\033[38;5;069m $text \033[0m";

} else if ($color == '5faf00') {
	$text = "\033[38;5;070m $text \033[0m";
} else if ($color == '5faf5f') {
	$text = "\033[38;5;071m $text \033[0m";
} else if ($color == '5faf87') {
	$text = "\033[38;5;072m $text \033[0m";
} else if ($color == '5fafaf') {
	$text = "\033[38;5;073m $text \033[0m";
} else if ($color == '5fafd7') {
	$text = "\033[38;5;074m $text \033[0m";
} else if ($color == '5fafff') {
	$text = "\033[38;5;075m $text \033[0m";
} else if ($color == '5fd700') {
	$text = "\033[38;5;076m $text \033[0m";
} else if ($color == '5fd75f') {
	$text = "\033[38;5;077m $text \033[0m";
} else if ($color == '5fd787') {
	$text = "\033[38;5;078m $text \033[0m";
} else if ($color == '5fd7af') {
	$text = "\033[38;5;079m $text \033[0m";

} else if ($color == '5fd7d7') {
	$text = "\033[38;5;080m $text \033[0m";
} else if ($color == '5fd7ff') {
	$text = "\033[38;5;081m $text \033[0m";
} else if ($color == '5fff00') {
	$text = "\033[38;5;082m $text \033[0m";
} else if ($color == '5fff5f') {
	$text = "\033[38;5;083m $text \033[0m";
} else if ($color == '5fff87') {
	$text = "\033[38;5;084m $text \033[0m";
} else if ($color == '5fffaf') {
	$text = "\033[38;5;085m $text \033[0m";
} else if ($color == '5fffd7') {
	$text = "\033[38;5;086m $text \033[0m";
} else if ($color == '5fffff') {
	$text = "\033[38;5;087m $text \033[0m";
} else if ($color == '870000') {
	$text = "\033[38;5;088m $text \033[0m";
} else if ($color == '87005f') {
	$text = "\033[38;5;089m $text \033[0m";

} else if ($color == '870087') {
	$text = "\033[38;5;090m $text \033[0m";
} else if ($color == '8700af') {
	$text = "\033[38;5;091m $text \033[0m";
} else if ($color == '8700d7') {
	$text = "\033[38;5;092m $text \033[0m";
} else if ($color == '8700ff') {
	$text = "\033[38;5;093m $text \033[0m";
} else if ($color == '875f00') {
	$text = "\033[38;5;094m $text \033[0m";
} else if ($color == '875f5f') {
	$text = "\033[38;5;095m $text \033[0m";
} else if ($color == '875f87') {
	$text = "\033[38;5;096m $text \033[0m";
} else if ($color == '875faf') {
	$text = "\033[38;5;097m $text \033[0m";
} else if ($color == '875fd7') {
	$text = "\033[38;5;098m $text \033[0m";
} else if ($color == '875fff') {
	$text = "\033[38;5;099m $text \033[0m";

} else if ($color == '878700') {
	$text = "\033[38;5;100m $text \033[0m";
} else if ($color == '87875f') {
	$text = "\033[38;5;101m $text \033[0m";
} else if ($color == '878787') {
	$text = "\033[38;5;102m $text \033[0m";
} else if ($color == '8787af') {
	$text = "\033[38;5;103m $text \033[0m";
} else if ($color == '8787d7') {
	$text = "\033[38;5;104m $text \033[0m";
} else if ($color == '8787ff') {
	$text = "\033[38;5;105m $text \033[0m";
} else if ($color == '87af00') {
	$text = "\033[38;5;106m $text \033[0m";
} else if ($color == '87af5f') {
	$text = "\033[38;5;107m $text \033[0m";
} else if ($color == '87af87') {
	$text = "\033[38;5;108m $text \033[0m";
} else if ($color == '87afaf') {
	$text = "\033[38;5;109m $text \033[0m";

} else if ($color == '87afd7') {
	$text = "\033[38;5;110m $text \033[0m";
} else if ($color == '87afff') {
	$text = "\033[38;5;111m $text \033[0m";
} else if ($color == '87d700') {
	$text = "\033[38;5;112m $text \033[0m";
} else if ($color == '87d75f') {
	$text = "\033[38;5;113m $text \033[0m";
} else if ($color == '87d787') {
	$text = "\033[38;5;114m $text \033[0m";
} else if ($color == '87d7af') {
	$text = "\033[38;5;115m $text \033[0m";
} else if ($color == '87d7d7') {
	$text = "\033[38;5;116m $text \033[0m";
} else if ($color == '87d7ff') {
	$text = "\033[38;5;117m $text \033[0m";
} else if ($color == '87ff00') {
	$text = "\033[38;5;118m $text \033[0m";
} else if ($color == '87ff5f') {
	$text = "\033[38;5;119m $text \033[0m";

} else if ($color == '87ff87') {
	$text = "\033[38;5;120m $text \033[0m";
} else if ($color == '87ffaf') {
	$text = "\033[38;5;121m $text \033[0m";
} else if ($color == '87ffd7') {
	$text = "\033[38;5;122m $text \033[0m";
} else if ($color == '87ffff') {
	$text = "\033[38;5;123m $text \033[0m";
} else if ($color == 'af0000') {
	$text = "\033[38;5;124m $text \033[0m";
} else if ($color == 'af005f') {
	$text = "\033[38;5;125m $text \033[0m";
} else if ($color == 'af0087') {
	$text = "\033[38;5;126m $text \033[0m";
} else if ($color == 'af00af') {
	$text = "\033[38;5;127m $text \033[0m";
} else if ($color == 'af00d7') {
	$text = "\033[38;5;128m $text \033[0m";
} else if ($color == 'af00ff') {
	$text = "\033[38;5;129m $text \033[0m";

} else if ($color == 'af5f00') {
	$text = "\033[38;5;130m $text \033[0m";
} else if ($color == 'af5f5f') {
	$text = "\033[38;5;131m $text \033[0m";
} else if ($color == 'af5f87') {
	$text = "\033[38;5;132m $text \033[0m";
} else if ($color == 'af5faf') {
	$text = "\033[38;5;133m $text \033[0m";
} else if ($color == 'af5fd7') {
	$text = "\033[38;5;134m $text \033[0m";
} else if ($color == 'af5fff') {
	$text = "\033[38;5;135m $text \033[0m";
} else if ($color == 'af8700') {
	$text = "\033[38;5;136m $text \033[0m";
} else if ($color == 'af875f') {
	$text = "\033[38;5;137m $text \033[0m";
} else if ($color == 'af8787') {
	$text = "\033[38;5;138m $text \033[0m";
} else if ($color == 'af87af') {
	$text = "\033[38;5;139m $text \033[0m";

} else if ($color == 'af87d7') {
	$text = "\033[38;5;140m $text \033[0m";
} else if ($color == 'af87ff') {
	$text = "\033[38;5;141m $text \033[0m";
} else if ($color == 'afaf00') {
	$text = "\033[38;5;142m $text \033[0m";
} else if ($color == 'afaf5f') {
	$text = "\033[38;5;143m $text \033[0m";
} else if ($color == 'afaf87') {
	$text = "\033[38;5;144m $text \033[0m";
} else if ($color == 'afafaf') {
	$text = "\033[38;5;145m $text \033[0m";
} else if ($color == 'afafd7') {
	$text = "\033[38;5;146m $text \033[0m";
} else if ($color == 'afafff') {
	$text = "\033[38;5;147m $text \033[0m";
} else if ($color == 'afd700') {
	$text = "\033[38;5;148m $text \033[0m";
} else if ($color == 'afd75f') {
	$text = "\033[38;5;149m $text \033[0m";

} else if ($color == 'afd787') {
	$text = "\033[38;5;150m $text \033[0m";
} else if ($color == 'afd7af') {
	$text = "\033[38;5;151m $text \033[0m";
} else if ($color == 'afd7d7') {
	$text = "\033[38;5;152m $text \033[0m";
} else if ($color == 'afd7ff') {
	$text = "\033[38;5;153m $text \033[0m";
} else if ($color == 'afff00') {
	$text = "\033[38;5;154m $text \033[0m";
} else if ($color == 'afff5f') {
	$text = "\033[38;5;155m $text \033[0m";
} else if ($color == 'afff87') {
	$text = "\033[38;5;156m $text \033[0m";
} else if ($color == 'afffaf') {
	$text = "\033[38;5;157m $text \033[0m";
} else if ($color == 'afffd7') {
	$text = "\033[38;5;158m $text \033[0m";
} else if ($color == 'afffff') {
	$text = "\033[38;5;159m $text \033[0m";

} else if ($color == 'd70000') {
	$text = "\033[38;5;160m $text \033[0m";
} else if ($color == 'd7005f') {
	$text = "\033[38;5;161m $text \033[0m";
} else if ($color == 'd70087') {
	$text = "\033[38;5;162m $text \033[0m";
} else if ($color == 'd700af') {
	$text = "\033[38;5;163m $text \033[0m";
} else if ($color == 'd700d7') {
	$text = "\033[38;5;164m $text \033[0m";
} else if ($color == 'd700ff') {
	$text = "\033[38;5;165m $text \033[0m";
} else if ($color == 'd75f00') {
	$text = "\033[38;5;166m $text \033[0m";
} else if ($color == 'd75f5f') {
	$text = "\033[38;5;167m $text \033[0m";
} else if ($color == 'd75f87') {
	$text = "\033[38;5;168m $text \033[0m";
} else if ($color == 'd75faf') {
	$text = "\033[38;5;169m $text \033[0m";

} else if ($color == 'd75fd7') {
	$text = "\033[38;5;170m $text \033[0m";
} else if ($color == 'd75fff') {
	$text = "\033[38;5;171m $text \033[0m";
} else if ($color == 'd78700') {
	$text = "\033[38;5;172m $text \033[0m";
} else if ($color == 'd7875f') {
	$text = "\033[38;5;173m $text \033[0m";
} else if ($color == 'd78787') {
	$text = "\033[38;5;174m $text \033[0m";
} else if ($color == 'd787af') {
	$text = "\033[38;5;175m $text \033[0m";
} else if ($color == 'd787d7') {
	$text = "\033[38;5;176m $text \033[0m";
} else if ($color == 'd787ff') {
	$text = "\033[38;5;177m $text \033[0m";
} else if ($color == 'dfaf00') {
	$text = "\033[38;5;178m $text \033[0m";
} else if ($color == 'dfaf5f') {
	$text = "\033[38;5;179m $text \033[0m";

} else if ($color == 'dfaf87') {
	$text = "\033[38;5;180m $text \033[0m";
} else if ($color == 'dfafaf') {
	$text = "\033[38;5;181m $text \033[0m";
} else if ($color == 'dfafdf') {
	$text = "\033[38;5;182m $text \033[0m";
} else if ($color == 'dfafff') {
	$text = "\033[38;5;183m $text \033[0m";
} else if ($color == 'dfdf00') {
	$text = "\033[38;5;184m $text \033[0m";
} else if ($color == 'dfdf5f') {
	$text = "\033[38;5;185m $text \033[0m";
} else if ($color == 'dfdf87') {
	$text = "\033[38;5;186m $text \033[0m";
} else if ($color == 'dfdfaf') {
	$text = "\033[38;5;187m $text \033[0m";
} else if ($color == 'dfdfdf') {
	$text = "\033[38;5;188m $text \033[0m";
} else if ($color == 'dfdfff') {
	$text = "\033[38;5;189m $text \033[0m";

} else if ($color == 'dfff00') {
	$text = "\033[38;5;190m $text \033[0m";
} else if ($color == 'dfff5f') {
	$text = "\033[38;5;191m $text \033[0m";
} else if ($color == 'dfff87') {
	$text = "\033[38;5;192m $text \033[0m";
} else if ($color == 'dfffaf') {
	$text = "\033[38;5;193m $text \033[0m";
} else if ($color == 'dfffdf') {
	$text = "\033[38;5;194m $text \033[0m";
} else if ($color == 'dfffff') {
	$text = "\033[38;5;195m $text \033[0m";
} else if ($color == 'ff0000') {
	$text = "\033[38;5;196m $text \033[0m";
} else if ($color == 'ff005f') {
	$text = "\033[38;5;197m $text \033[0m";
} else if ($color == 'ff0087') {
	$text = "\033[38;5;198m $text \033[0m";
} else if ($color == 'ff00af') {
	$text = "\033[38;5;199m $text \033[0m";

} else if ($color == 'ff00df') {
	$text = "\033[38;5;200m $text \033[0m";
} else if ($color == 'ff00ff') {
	$text = "\033[38;5;201m $text \033[0m";
} else if ($color == 'ff5f00') {
	$text = "\033[38;5;202m $text \033[0m";
} else if ($color == 'ff5f5f') {
	$text = "\033[38;5;203m $text \033[0m";
} else if ($color == 'ff5f87') {
	$text = "\033[38;5;204m $text \033[0m";
} else if ($color == 'ff5faf') {
	$text = "\033[38;5;205m $text \033[0m";
} else if ($color == 'ff5fdf') {
	$text = "\033[38;5;206m $text \033[0m";
} else if ($color == 'ff5fff') {
	$text = "\033[38;5;207m $text \033[0m";
} else if ($color == 'ff8700') {
	$text = "\033[38;5;208m $text \033[0m";
} else if ($color == 'ff875f') {
	$text = "\033[38;5;209m $text \033[0m";

} else if ($color == 'ff8787') {
	$text = "\033[38;5;210m $text \033[0m";
} else if ($color == 'ff87af') {
	$text = "\033[38;5;211m $text \033[0m";
} else if ($color == 'ff87df') {
	$text = "\033[38;5;212m $text \033[0m";
} else if ($color == 'ff87ff') {
	$text = "\033[38;5;213m $text \033[0m";
} else if ($color == 'ffaf00') {
	$text = "\033[38;5;214m $text \033[0m";
} else if ($color == 'ffaf5f') {
	$text = "\033[38;5;215m $text \033[0m";
} else if ($color == 'ffaf87') {
	$text = "\033[38;5;216m $text \033[0m";
} else if ($color == 'ffafaf') {
	$text = "\033[38;5;217m $text \033[0m";
} else if ($color == 'ffafdf') {
	$text = "\033[38;5;218m $text \033[0m";
} else if ($color == 'ffafff') {
	$text = "\033[38;5;219m $text \033[0m";

} else if ($color == 'ffdf00') {
	$text = "\033[38;5;220m $text \033[0m";
} else if ($color == 'ffdf5f') {
	$text = "\033[38;5;221m $text \033[0m";
} else if ($color == 'ffdf87') {
	$text = "\033[38;5;222m $text \033[0m";
} else if ($color == 'ffdfaf') {
	$text = "\033[38;5;223m $text \033[0m";
} else if ($color == 'ffdfdf') {
	$text = "\033[38;5;224m $text \033[0m";
} else if ($color == 'ffdfff') {
	$text = "\033[38;5;225m $text \033[0m";
} else if ($color == 'ffff00') {
	$text = "\033[38;5;226m $text \033[0m";
} else if ($color == 'ffff5f') {
	$text = "\033[38;5;227m $text \033[0m";
} else if ($color == 'ffff87') {
	$text = "\033[38;5;228m $text \033[0m";
} else if ($color == 'ffffaf') {
	$text = "\033[38;5;229m $text \033[0m";

} else if ($color == 'ffffdf') {
	$text = "\033[38;5;230m $text \033[0m";
} else if ($color == 'ffffff') {
	$text = "\033[38;5;231m $text \033[0m";
} else if ($color == '080808') {
	$text = "\033[38;5;232m $text \033[0m";
} else if ($color == '121212') {
	$text = "\033[38;5;233m $text \033[0m";
} else if ($color == '1c1c1c') {
	$text = "\033[38;5;234m $text \033[0m";
} else if ($color == '262626') {
	$text = "\033[38;5;235m $text \033[0m";
} else if ($color == '303030') {
	$text = "\033[38;5;236m $text \033[0m";
} else if ($color == '3a3a3a') {
	$text = "\033[38;5;237m $text \033[0m";
} else if ($color == '444444') {
	$text = "\033[38;5;238m $text \033[0m";
} else if ($color == '4e4e4e') {
	$text = "\033[38;5;239m $text \033[0m";

} else if ($color == '585858') {
	$text = "\033[38;5;240m $text \033[0m";
} else if ($color == '626262') {
	$text = "\033[38;5;241m $text \033[0m";
} else if ($color == '6c6c6c') {
	$text = "\033[38;5;242m $text \033[0m";
} else if ($color == '767676') {
	$text = "\033[38;5;243m $text \033[0m";
} else if ($color == '808080') {
	$text = "\033[38;5;244m $text \033[0m";
} else if ($color == '8a8a8a') {
	$text = "\033[38;5;245m $text \033[0m";
} else if ($color == '949494') {
	$text = "\033[38;5;246m $text \033[0m";
} else if ($color == '9e9e9e') {
	$text = "\033[38;5;247m $text \033[0m";
} else if ($color == 'a8a8a8') {
	$text = "\033[38;5;248m $text \033[0m";
} else if ($color == 'b2b2b2') {
	$text = "\033[38;5;249m $text \033[0m";

} else if ($color == 'bcbcbc') {
	$text = "\033[38;5;250m $text \033[0m";
} else if ($color == 'c6c6c6') {
	$text = "\033[38;5;251m $text \033[0m";
} else if ($color == 'd0d0d0') {
	$text = "\033[38;5;252m $text \033[0m";
} else if ($color == 'dadada') {
	$text = "\033[38;5;253m $text \033[0m";
} else if ($color == 'e4e4e4') {
	$text = "\033[38;5;254m $text \033[0m";
} else if ($color == 'eeeeee') {
	$text = "\033[38;5;255m $text \033[0m";
} else {
	$text = "$text";
}
	return $text;
} // end main if

?>
