<?php

namespace App\Http\Controllers;
use App\Models\AdminUser;
use App\Models\Gym;
use Illuminate\Http\Request;
use App\Traits\SessionTrait;
use Illuminate\Support\Facades\Log;

class AdminUserController extends Controller
{
    use SessionTrait;
    protected $user;
    protected $gym;

    public function __construct(AdminUser $user, Gym $gym)
    {
        $this->user = $user;
        $this->gym = $gym;
       
    }

    public function showAddUsers()
    {
        $status = null;
        $message = null;
        $gyms = $this->gym->get();

        return view('admin.adminUser.addAdminUsers', compact('status', 'message', 'gyms'));
    }

    public function addUserByadmin(Request $request)
    {
        try {

            $validatedData = $request->validate([
                'gym_id' => 'required',
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required',
                'gender' => 'required',
                'phone_no' => 'required',
                'username' => 'required',
                'password' => 'required',
                'image' => 'required'
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

            $this->user->addUser($validatedData, $imagePath);

            return back()->with('status', 'success')->with('message', 'User Added Succesfully');
        } catch (\Exception $e) {
            Log::error('[AdminUserController][addUserByadmin]Error adding : ' . 'Request=' . $e->getMessage());
            return back()->with('status', 'error')->with('message', 'User Not Added ');
        }
    }

    public function adminUserList()
    {
        $users = $this->user->all();    
        return view('admin.adminUser.adminUserList', compact('users'));
    }

    public function viewEditUser($uuid)
    {
        $user = $this->user->where('uuid', $uuid)->first();
        $gyms = $this->gym->get();
        return view('admin.adminUser.editAdminUser', compact('user','gyms'));
    }

    public function updateAdminUser(Request $request)
    {
        try {
            
            $validatedData = $request->validate([
                'uuid' => 'required',
                'gym_id' => 'required',
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required',
                'gender' => 'required',
                'phone_no' => 'required',
                'username' => 'required',
                'password' => 'required',
                'image' => 'nullable'
            ]);


            $imagePath = null;
            if ($request->hasFile('image')) {
                $gymImage = $request->file('image');
                $filename = time() . '_' . $gymImage->getClientOriginalName();
                $imagePath = 'admin_user_images/' . $filename;
                $gymImage->move(public_path('admin_user_images/'), $filename);
            }

            $isProfileUpdated = $this->user->updateUser($validatedData, $imagePath);



            if ($isProfileUpdated) {
                return redirect()->route('adminUserList')->with('status', 'success')->with('message', 'User updated successfully.');
            }
            return redirect()->back()->with('status', 'error')->with('message', 'error while updating user.');
        } catch (\Exception $e) {
            Log::error('[AdminUserController][updateAdminUser] Error updating user ' . 'Request=' . $request . ', Exception=' . $e->getMessage());
            return redirect()->back()->with('status', 'error')->with('message', 'error while updating user.');
        }
    }
    
}
