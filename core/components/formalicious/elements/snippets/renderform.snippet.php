<?php
/**
 * Formalicious
 *
 * Copyright 2019 by Sterc <modx@sterc.nl>
 */

$instance = $modx->getService('FormaliciousSnippetRenderForm', 'FormaliciousSnippetRenderForm', $modx->getOption('formalicious.core_path', null, $modx->getOption('core_path') . 'components/formalicious/') . 'model/formalicious/snippets/');

if ($instance instanceof FormaliciousSnippetRenderForm) {
    return $instance->run($scriptProperties);
}

return '';