<?php

namespace Acme\OAuthServerBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Claroline\CoreBundle\Library\PluginBundle;
class AcmeOAuthServerBundle extends Bundle
{
     public function getParent()  
    {  
        return 'FOSOAuthServerBundle';  
    }  
}
