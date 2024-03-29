<?php

declare(strict_types=1);

namespace Cortex\Tenants\Transformers;

use Cortex\Tenants\Models\Tenant;
use Rinvex\Support\Traits\Escaper;
use League\Fractal\TransformerAbstract;

class TenantTransformer extends TransformerAbstract
{
    use Escaper;

    /**
     * Transform tenant model.
     *
     * @param \Cortex\Tenants\Models\Tenant $tenant
     *
     * @throws \Exception
     *
     * @return array
     */
    public function transform(Tenant $tenant): array
    {
        $country = $tenant->country_code ? country($tenant->country_code) : null;
        $language = $tenant->language_code ? language($tenant->language_code) : null;

        return $this->escape([
            'id' => (string) $tenant->getRouteKey(),
            'name' => (string) $tenant->name,
            'email' => (string) $tenant->email,
            'phone' => (string) $tenant->phone,
            'country_code' => (string) $country?->getName(),
            'country_emoji' => (string) $country?->getEmoji(),
            'language_code' => (string) $language?->getName(),
            'created_at' => (string) $tenant->created_at,
            'updated_at' => (string) $tenant->updated_at,
        ]);
    }
}
