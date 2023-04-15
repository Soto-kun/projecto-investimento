<?php

namespace App\Services;

use App\Repositories\UserRepository;
use App\Validators\UserValidator;
use Prettus\Validator\Contracts\ValidatorInterface;
use Exception;
use Illuminate\Database\QueryException;
use Prettus\Validator\Exceptions\ValidatorException;

class UserService 
{
    private $repository;
    private $validator;

    public function __construct(UserRepository $repository, UserValidator $validator)
    {
        $this->repository  = $repository;
        $this->validator   = $validator;
    }

    public function store($data)
    {
        try 
        {
            $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_CREATE);
            $usuario = $this->repository->create($data);

            return [
                'success' => true,
                'messages' => "Usúario cadastrado",
                'data'    => $usuario,
            ];
        } 
        catch (Exception $e) 
        {
            switch (get_class($e)) {
                case QueryException::class :
                    return ['success' => false, 'messages' => $e->getMessage()];
                break;
                case ValidatorException::class :
                    return ['success' => false, 'messages' => $e->getMessageBag()];
                break;
                case Exception::class :
                    return ['success' => false, 'messages' => $e->getMessage()];
                break;
                default:
                    return ['success' => false, 'messages' => get_class($e)];
                break;
            }   
        }
    }
}