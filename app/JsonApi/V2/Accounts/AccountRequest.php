<?php

declare(strict_types=1);

namespace FireflyIII\JsonApi\V2\Accounts;

use LaravelJsonApi\Laravel\Http\Requests\ResourceRequest;

class AccountRequest extends ResourceRequest
{
    /**
     * Get the validation rules for the resource.
     */
    public function rules(): array
    {
        return [
            // @TODO
        ];
    }
}
