<?php
/**
 * PostWebsite
 * @package post-website
 * @version 0.0.1
 */

namespace PostWebsite\Model;

class PostWebsite extends \Mim\Model
{

    protected static $table = 'post_website';

    protected static $chains = [];

    protected static $q = ['name'];
}