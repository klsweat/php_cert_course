<?php
/**
 * Form Functions (Functions that are specific for building HTML forms)
 */

/**
 * @param $config
 * @param $name
 * @param null $conn
 * @param null $selected
 * @return string
 */
function getForm($config, $name, $conn = null, $selected = null)
{

	$form = getStartTag($config['forms'][$name]);
    $form .= getElements($config, $name, $conn, $selected);
    $form .= '</form>';

	/*************************************************
	* Clear Input Fields
	$form .= '<script type="text/javascript">' .
			 ' document.getElementById("addChecklistItem").reset(); '.
			 '</script>';
	*************************************************/
    

    return $form;
}

/**
 * @param $config
 * @return string
 */
function getStartTag($config)
{
    $tag = '<form ';
    foreach ($config as $key => $value) {
        if ($key === 'elements') continue;
        $tag .= " $key=\"$value\"";
    }
    return $tag .= '>';
}

/**
 * @param $config
 * @param $name
 * @param null $conn
 * @param $selected
 * @return null|string
 */
function getElements($config, $name, $conn = null, $selected = null)
{
    $html = null;
    $form = $config['forms'][$name];

    // Iterate over form elements, building each element
    foreach ($form['elements'] as $key => $value) {
        $html .= isset($value['label']) ? "<label>{$value['label']}</label>" : null;
        $divclass = isset($value['divclass']) ? "class=\"{$value['divclass']}\"":null;
        switch ($value['type']) {
            case 'text':
                $html .= "<div $divclass><input type=\"text\" class=\"{$value['class']}\" name=\"{$value['name']}\" maxlength=\"{$value['size']}\" value=\"\" /></div>";
                break;
	    case 'email':
                $html .= "<div $divclass><input type=\"email\" class=\"{$value['class']}\" name=\"{$value['name']}\" maxlength=\"{$value['size']}\"/></div>";
                break;
	    case 'password':
                $html .= "<div $divclass><input type=\"password\" class=\"{$value['class']}\" name=\"{$value['name']}\" maxlength=\"{$value['size']}\"/></div>";
                break;
            case 'submit':
                $html .= "<div $divclass><input type=\"{$value['type']}\" class=\"{$value['class']}\" id=\"{$value['id']}\" value=\"{$value['value']}\"/></div>";
                break;
        }
	
	$html .= '<br>';

    }
    return $html;
}


