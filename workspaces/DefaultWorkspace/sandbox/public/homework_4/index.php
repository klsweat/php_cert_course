<?php
// get config file
function getConfig($configFile) {
	$config = include __DIR__ . '/config/' . $configFile;
    return getForm($configArray, 'new_order');
}                

// The form entry function that builds an HTML form from configuration
function getForm($config, $name)
{
    $form = getStartTag($config['forms'][$name]);
    $form .= getElements($config, $name);
    $form .= '</form>';
    return $form;
}

// The function that builds the start tag
function getStartTag($config)
{
    $tag = '<form ';
    foreach ($config as $key => $value) {
        if ($key === 'elements') continue;
        $tag .= " $key=\"$value\"";
    }
    return $tag .= '>';
}

// The function that adds form elements
function getElements($config, $name)
{
    $html = null;
    $form = $config['forms'][$name];

    // Iterate over form elements, building each element
    foreach ($form['elements'] as $key => $value) {
        $html .= isset($value['label']) ? "<label>{$value['label']}</label>" : null;
        $divclass = isset($value['divclass']) ? "class=\"{$value['divclass']}\"":null;
        switch ($value['type']) {
            case 'text':
                $html .= "<div $divclass><input type=\"text\" class=\"{$value['class']}\" name=\"{$value['name']}\" size=\"{$value['size']}\"/></div>";
                break;
            case 'textarea':
                $html .= "<div $divclass><textarea class=\"{$value['class']}\" name=\"{$value['name']}\" cols=\"{$value['cols']}\" rows=\"{$value['rows']}\"></textarea></div>";
                break;
	    	case 'select':
                $html .= "<div $divclass><select class=\"{$value['class']}\" name=\"{$value['name']}\">";
		
				foreach($value['options'] as $keyValue => $options){

					$selected = ($options['innerText'] === '-- SELECT --') ? "selected = 'selected'" : "" ;				
					$html .= "<option {$selected} value=\"{$options['value']}\"> {$options['innerText']} </option>";
				}
		
				$html .= "</select></div>";

                break;

            case 'submit':
                $html .= "<div $divclass><input type=\"{$value['type']}\" class=\"{$value['class']}\" value=\"{$value['value']}\"/></div>";
                break;
        }
    }
    return $html;
}



echo '<html>' . getConfig("config.php") . '</html>';

