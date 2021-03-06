<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CpcVideoAdBuilderAdUpdate extends AdBuilderAdUpdateBase
{

//    Can be omit.
//    protected $Href = null;

    /**
     * Creates a new instance of CpcVideoAdBuilderAdUpdate.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Href.
     *
     * @return string|null
     */
    public function getHref()
    {
        return isset($this->Href) ? $this->Href : null;
    }

    /**
     * Sets Href.
     *
     * @param string|null $value
     * @return $this
     */
    public function setHref($value = null)
    {
        $this->Href = $value;

        return $this;
    }


}

