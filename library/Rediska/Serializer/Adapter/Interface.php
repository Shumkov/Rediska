<?php

/**
 * Rediska serializer adapter interface
 * 
 * @author Ivan Shumkov
 * @package Rediska
 * @version @package_version@
 * @link http://rediska.geometria-lab.net
 * @licence http://www.opensource.org/licenses/bsd-license.php
 */
interface Rediska_Serializer_Adapter_Interface
{
    /**
     * Serialize value
     *
     * @param mixin $value
     * @return string
     */
    public function serialize($value);
    
    /**
     * Unserialize value
     *
     * @param string $value
     * @return mixin
     */
    public function unserialize($value);
}