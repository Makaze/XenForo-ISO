<?php

class ISO_Xenforo_Search_DataHandler_Post extends XFCP_ISO_XenForo_Search_DataHandler_Post {
    public function renderResult(XenForo_View $view, array $result, array $search) {
        if ($result['message']) {
            $bbCodeParser = new XenForo_BbCode_Parser(XenForo_BbCode_Formatter_Base::create('Base', array('view' => $view)));
            $result['messageHtml'] = new XenForo_BbCode_TextWrapper($result['message'], $bbCodeParser);
        }

        return parent::renderResult($view, $result, $search);
    }
}

// ******************** FOR IDE AUTO COMPLETE ********************
if (false) {
    class XFCP_ISO_XenForo_Search_DataHandler_Post extends XenForo_Search_DataHandler_Post {}
}