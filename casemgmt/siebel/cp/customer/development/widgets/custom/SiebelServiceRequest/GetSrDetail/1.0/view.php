<!--
/* * *******************************************************************************************
 *  This file is part of the Oracle Service Cloud Accelerator Reference Integration set published
 *  by Oracle Service Cloud under the Universal Permissive License (UPL), Version 1.0
 *  included in the original distribution.
 *  Copyright (c) 2014, 2015, 2016, Oracle and/or its affiliates. All rights reserved.
 ***********************************************************************************************
 *  Accelerator Package: OSVC Contact Center + Siebel Case Management Accelerator
 *  link: http://www.oracle.com/technetwork/indexes/samplecode/accelerator-osvc-2525361.html
 *  OSvC release: 15.8 (August 2015)
 *  Siebel release: 8.1.1.15
 *  reference: 150520-000047
 *  date: Mon Nov 30 20:14:21 PST 2015

 *  revision: rnw-15-11-fixes-release-2
 *  SHA1: $Id: 0bdee61fbe5f21f4859c81caf07340d113c908e7 $
 * *********************************************************************************************
 *  File: view.php
 * ****************************************************************************************** */
-->
<div  id="rn_<?= $this->instanceID; ?>" class="<?= $this->classList ?>">
    <rn:block id="top"/>

    <!-- loading spinner -->
    <div id="rn_<?= $this->instanceID; ?>_Loading"></div>

    <!-- content --->
    <div id="rn_<?= $this->instanceID; ?>_Content" class="rn_Content"></div>
    
    <rn:block id="bottom"/>
</div>
