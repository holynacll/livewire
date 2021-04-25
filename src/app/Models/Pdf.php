<?php

namespace App\Models;

use setasign\Fpdi\Fpdi;

class Pdf extends Fpdi
{
    protected $_tplIdx;

    public function Header()
    {
        if (null === $this->_tplIdx) {
            $this->setSourceFile(storage_path('app/public/template-example.pdf'));
            $this->_tplIdx = $this->importPage(1);
        }

        $this->useImportedPage($this->_tplIdx);
    }
}