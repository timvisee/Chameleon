{*
NOTE: These template files where used for a previous templating system that was being build,
      Chameleon might fail parsing this file
*}

{* this is an random command >:D *}

{* Print the value from a variable *}
Var value: {$num}<br />

{* Increase the value by one *}
{$num++}

{* Print the value again from the increased variable *}
Var value: {$num}<br />

{* Print the var value from a variable *}
Var value: {$a123}

{* Comment tag *}

{* Include the header template file *}
{INCLUDE TPL header.tpl}

{* Include some random thing (error) *}
{INCLUDE 123}

{* Code tag *}
{CODE}
{123}
8
{456}
9
{/CODE}
9

{* Unfinished comment }
10
11
{$var_name}
12
13
{$array_name[]}
14
15
adsf\{*Normal Comment *}{}{}aabcb
var:
{$var_name}{}{$var_name}{$var_name[]}
asdfasdfasdf1{}a
9
{$num}
o
{$num123}
test123