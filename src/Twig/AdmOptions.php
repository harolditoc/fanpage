<?php

namespace App;

use App\Twig\Components\EditBannerComponent;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

class AdmOptions
{
    public function getOptions()
    {
        $options = [
            EditBannerComponent::class,
        ];
        return $this->verOptions($options);
    }
    
    private function verOptions(array $options)
    {
        $finalOptions = [];
        foreach($options as $option){
            $name = $this->getOptionsName($option);
            $finalOptions[$name] = [
                'class' => $option,
                'componentName' => $name,
            ];
        }

    }

    private function getOptionsName(string $optionClass): string
    {
        $class = new \ReflectionClass($optionClass);
        $atributos = $class->getAttributes(AsTwigComponent::class, \ReflectionAttribute::IS_INSTANCEOF);
        
        return $atributos[0]->getArguments()[0];
    }
}
