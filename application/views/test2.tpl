{$test}

{*assign var=foo value=html::anchor('/test', 'test', $param)}
{$foo*}

{php}
html::anchor('/test', 'test', array('id' => 'ddd'))
{/php}

