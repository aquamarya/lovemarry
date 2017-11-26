<?php
   function kibmak_preprocess_page(&$variables) {
   if (isset($variables['node']) && $variables['node']->type) {
	$variables['theme_hook_suggestions'][] = 'page__node_type_'. $variables['node']->type;
  }
}

function kibmak_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'search_block_form') {
    $form['search_block_form']['#title'] = t('Search'); // Change the text on the label element
    $form['search_block_form']['#title_display'] = 'invisible'; // Toggle label visibilty
    $form['search_block_form']['#size'] = 40;  // define size of the textfield
        $deftext = t('Поиск по сайту...');
    $form['search_block_form']['#default_value'] = $deftext; // Set a default value for the textfield
    $form['actions']['submit']['#value'] = t('GO!'); // Change the text on the submit button


// Add extra attributes to the text box
    $form['search_block_form']['#attributes']['onblur'] = "if (this.value == '') {this.value = '".$deftext."';}";
    $form['search_block_form']['#attributes']['onfocus'] = "if (this.value == '".$deftext."') {this.value = '';}";
  }
}

function kibmak_preprocess_node(&$variables) {
  if ($variables['type'] == 'product') {
    if (isset($variables['field_action']['und'])) {
      $variables['classes_array'][] = $variables['field_action']['und'][0]['value'];
    }
  }
}
function kibmak_css_alter(&$css) {
    foreach ($css as $key => $value) {
        if ($value['group'] != CSS_THEME) {
            $exclude[$key] = FALSE;
        }
    }
    $css = array_diff_key($css, $exclude);
}
function kibmak_js_alter(&$js) {
    foreach ($js as $key => $value) {
        if ($value['group'] != JS_THEME) {
            $exclude[$key] = FALSE;
        }
    }
    $js = array_diff_key($js, $exclude);
}
  