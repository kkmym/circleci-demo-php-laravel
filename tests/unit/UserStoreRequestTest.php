<?php

use App\Http\Requests\UserStoreRequest;

class UserStoreRequestTest extends \Codeception\TestCase\Test
{
    protected $tester;

    public function testValidate()
    {
        $inputDatas = [
            'email' => 'xxxx@gmail.com',
            'password' => 'Passw0rd',
        ];

        $request = new UserStoreRequest();
        $rules = $request->rules();

        $validator = Validator::make($inputDatas, $rules);
        $result = $validator->passes();

        $this->assertEquals($result, true);
    }
}
