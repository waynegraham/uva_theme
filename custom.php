<?php

/**
 * gets random items to display
 *
 * @param int  $num      Number of items
 * @param bool $hasImage Include only items with images?
 *
 * @return array Array of OmekaItems
 */
function random_public_items($num = 5, $hasImage = null)
{
    return get_items(array('random' => 1, 'hasImage' => $hasImage), $num);
}

function Uva_Simple_Search()
{
  if (!$buttonText) {
    $buttonText = __('Search');
  }

  // Always post the 'items/browse' page by default (though can be overridden).
  if (!$uri) {
    $uri = apply_filters('simple_search_default_uri', uri('items/browse'));
  }

  $searchQuery = array_key_exists('search', $_GET) ? $_GET['search'] : '';
  $formProperties['action'] = $uri;
  $formProperties['method'] = 'get';
  $formProperties['id'] = 'uva-simple-search';
  $html  = '<form ' . _tag_attributes($formProperties) . '>' . "\n";
  //$html .= '<fieldset>' . "\n\n";
  $html .= __v()->formText(
    'search',
    $searchQuery,
    array(
      'name'=>'search',
      'class'=>'textinput',
      'placeholder' => 'Search contributions'
    )
  );
  $html .= __v()->formSubmit('submit_search', $buttonText, array('class' => 'button'));
  //$html .= '</fieldset>' . "\n\n";

  // add hidden fields for the get parameters passed in uri
  $parsedUri = parse_url($uri);
  if (array_key_exists('query', $parsedUri)) {
    parse_str($parsedUri['query'], $getParams);
    foreach($getParams as $getParamName => $getParamValue) {
      $html .= __v()->formHidden($getParamName, $getParamValue);
    }
  }

  $html .= '</form>';
  return $html;
}

add_filter(array('Display', 'Item', 'Item Type Metadata', 'Local URL'), 'uva_link_to_url');
add_filter(array('Display', 'Item', 'Dublin Core', 'Description'), 'uva_link_to_url');

function uva_link_to_url($url) {

  $pattern = "((https?://)+[\w\d:#@%!/;$()~_?\+-=\\\.&]*)";
  $url = preg_replace($pattern, '<a href="\0">\0</a>', $url);

  return $url;
}
