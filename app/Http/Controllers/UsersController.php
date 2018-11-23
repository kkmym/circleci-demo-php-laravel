<?php namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserStoreRequest;

class UsersController extends Controller {

    /**
     * User Repository
     *
     * @var User
     */
    protected $user;

    /**
     * Constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $user = $this->user->findOrFail($id);

        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $user = $this->user->findOrFail($id);

        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, ['email' => 'required|email']);

        $user = $this->user->findOrFail($id);
        $user->update($request->all());
        $user->save();

        return redirect()->route('users.show', $id);
    }


    public function create()
    {
        return view('users.create');
    }

    public function store(UserStoreRequest $request)
    {
        try {
            $user = User::register($request->all());
        } catch (\Exception $exp) {
            $messages = new \Illuminate\Support\MessageBag;
            $messages->add('', 'ユーザーの登録に失敗しました。');
            return redirect()->route('users.create')->withErrors($messages);
        }
        return redirect()->route('users.show', $user->id);
    }

}
