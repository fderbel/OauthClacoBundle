namespace Acme\OAuthServerBundle\Form\Type;  
  
use Symfony\Component\Form\FormBuilder;  
use Symfony\Component\Form\AbstractType;  
  
class AuthorizeFormType extends AbstractType  
{  
    public function buildForm(FormBuilder $builder, array $options)  
    {  
        $builder->add('allowAccess', 'checkbox', array(  
            'label' => 'Allow access',  
        ));  
    }  
  
    public function getDefaultOptions(array $options)  
    {  
        return array('data_class' => 'Acme\OAuthServerBundle\Form\Model\Authorize');  
    }  
  
    public function getName()  
    {  
        return 'acme_oauth_server_authorize';  
    }  
      
}  
