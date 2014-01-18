<?php
perch_content_create(
        'Redirection',
        array(
            'template'      => 'redirection.html',
            'multiple'      => false,
            'searchable'    => false,
        ));

$redirection_details = perch_content_custom(
        'Redirection',
        array(
            'skip-template' => true,
            'count'         => 1,

        ));

$redirect_url = ($redirection_details[0]['redirectType'] == 'internal')
        ? $redirection_details[0]['internalURL']
        : $redirection_details[0]['externalURL'];

header('Location: ' . $redirect_url, true, (int) $redirection_details[0]['redirectHttpCode']);
exit;
