<?php

namespace Modules\Employees\Http\Controllers;

use Modules\Employees\Models\Team;
use Modules\Employees\Http\Requests\CreateTeamRequest;
use Modules\Employees\Http\Requests\UpdateTeamRequest;
use Modules\Employees\Requests\TeamRequest;
use Modules\Employees\Requests\TeamUpdate;
use Modules\Employees\Repositories\TeamRepository;
use Yajra\Datatables\Services\DataTable;
use Yajra\Datatables\Facades\Datatables;
use Modules\Employees\Models\AssignTeamStaff;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class TeamsController extends Controller
{
    /** @var  TeamRepository */
    private $teamRepository;

    public function __construct(TeamRepository $teamsRepo)
    {
        $this->teamRepository = $teamsRepo;
    }
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('employees::teams.index');
    }

    public function anyData()
    {
        //->with('addresses')
        $teams = Team::select(['id', 'name', 'status', 'team_lead', 'assign_alert', 'admin_notes']);
/*        $relations = Relation::with(array('addresses'=>function($query){
            $query->addSelect(array('id','address', 'housenumber', 'postalcode', 'city_id', 'country_id'));
        }))->get('id', 'name', 'shortname', 'relationtype_id');*/

/*
// Example: We only want the title of the posts.
$authors = Author::with(array('posts' => function($query)
{
    // Notice the addition of the author_id field!
    $query->addSelect(array('title', 'author_id'));
}))->get();
 **/



        return Datatables::of($teams)

            ->addColumn('teamnamelink', function ($teams) {
                return '<a href="backend/teams/' . $teams->id . '" ">' . $teams->name . '</a>';
            })
            ->addColumn('teamsstatuslink', function ($teams) {
                return $teams->status;
            })
            ->addColumn('teamleadlink', function ($teams) {
                return $teams->team_lead;
            })

            ->addColumn('actions', function ($teams) {
                return '
                <form action="' . route('backend.teams.destroy', [$teams->id]) .'" method="POST">
                <div class=\'btn-group\'>
                    <input type="hidden" name="_method" value="DELETE">
                    <a href="' . route('backend.teams.edit', [$teams->id]) . '" class=\'btn btn-success btn-xs\'>Edit</a>
                    <input type="submit" name="submit" value="Delete" class="btn btn-danger btn-xs" onClick="return confirm(\'Are you sure?\')"">
                </div>
                </form>';
            })
            ->make(true);
    }
    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('employees::teams.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Teams $team, TeamRequest $request)
    {
        $input = $request->all();

/*

        if ($request->team_lead) {
            $team_lead = $request->team_lead;
        } else {
            $team_lead = null;
        }
        $team->team_lead = $team_lead;
        try {
            /* Check whether function success or not *  /
            $team->fill($request->except('team_lead'))->save();
            /* redirect to Index page with Success Message *  /
            return redirect('teams')->with('success', 'Teams  Created Successfully');
        } catch (Exception $e) {
            /* redirect to Index page with Fails Message *  /
            return redirect('teams')->with('fails', 'Teams can not Create'.'<li>'.$e->errorInfo[2].'</li>');
        }
*/



        $teams = $this->teamRepository->create($input);

        Flash::success('Team saved successfully.');

        return redirect(route('backend.teams.index'));
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show($id)
    {
        $teams = $this->teamRepository->findWithoutFail($id);

        if (empty($teams)) {
            Flash::error('Team not found');

            return redirect(route('backend.teams.index'));
        }

        return view('employees::teams.show')->with('teams', $teams);
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id, User $user, Assign_team_agent $assign_team_staff, Teams $team)
    {
        $teams = $this->teamRepository->findWithoutFail($id);

/*

            $user = $user->whereId($id)->first();
            $teams = $team->whereId($id)->first();
            $agent_team = $assign_team_staff->where('team_id', $id)->get();
            $agent_id = $agent_team->lists('agent_id', 'agent_id');

            return view('core::staff.teams.edit', compact('agent_id', 'user', 'teams', 'allagents'));
        } catch (Exception $e) {
            return redirect()->back()->with('fails', $e->errorInfo[2]);
        }

*/



        if (empty($teams)) {
            Flash::error('Team not found');

            return redirect(route('backend.teams.index'));
        }

        return view('employees::teams.edit')->with('teams', $teams);
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(UpdateTeamRequest $request, $id)
    {
        $teams = $this->teamRepository->findWithoutFail($id);

        if (empty($teams)) {
            Flash::error('team not found');

            return redirect(route('backend.teams.index'));
        }

        $teams = $this->teamRepository->update($request->all(), $id);

        Flash::success('Team updated successfully.');

        return redirect(route('backend.teams.index'));
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        $teams = $this->teamRepository->findWithoutFail($id);

        if (empty($teams)) {
            Flash::error('Team not found');

            return redirect(route('backend.teams.index'));
        }

        $this->teamRepository->delete($id);

        Flash::success('Team deleted successfully.');

        return redirect(route('backend.teams.index'));
    }
}
