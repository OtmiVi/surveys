<?php

function redirect(string $link, string $params = ''): void
{
    header("Location: $link?$params");
    exit();
}