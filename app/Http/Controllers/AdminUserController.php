<?php

namespace App\Http\Controllers;
use App\Models\AdminUser;
use Illuminate\Http\Request;
use App\Traits\SessionTrait;
use Illuminate\Support\Facades\Log;

class AdminUserController extends Controller
{
    use SessionTrait;
    protected $user;

    public function __construct(AdminUser $user)
    {
        $this->user = $user;
       
    }

    public function showAddUsers()
    {

        return view('admin.adminUser.addAdminUsers');
    }

    public function addUserByadmin(Request $request)
    {
        try {
            // $gym_uuid = $this->getGymSession()['uuid'];
            $gymId = 12;

            $validatedData = $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required',
                'gender' => 'required',
                'phone_no' => 'required',
                'username' => 'required',
                'password' => 'required'

            ]);

            // dd($validatedData);
            $imagePath = null;
            $data = $request->all();
            if ($request->hasFile('image')) {
                $userImage = $request->file('image');
                $filename = time() . '_' . $userImage->getClientOriginalName();
                $imagePath = 'admin_user_images/' . $filename;
                $userImage->move(public_path('admin_user_images/'), $filename);
            }

            $this->user->addUser($validatedData, $imagePath, $gymId);

            return back()->with('status', 'success')->with('message', 'User Added Succesfully');
        } catch (\Exception $e) {
            Log::error('[AdminUserController][addUserByadmin]Error adding : ' . 'Request=' . $e->getMessage());
            return back()->with('status', 'error')->with('message', 'User Not Added ');
        }
    }

    public function adminUserList()
    {
        // $gym_uuid = $this->getGymSession()['uuid'];
        // $gymId = $this->gym->where('uuid', $gym_uuid)->first()->id;
        $users = $this->user->all();


        return view('admin.adminUser.adminUserList', compact('users'));
    }

}
