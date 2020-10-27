<?php

print_r($_ENV);

$file = file_get_contents('/home/runner/work/_temp/_github_workflow/event.json');

print_r(json_decode($file,true));


print_r(get_defined_vars());
