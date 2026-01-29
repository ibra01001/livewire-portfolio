<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;

#[Layout('livewire.layout.admin')]
class Index extends Component
{
    use WithPagination;

    public $categoryFilter = '';

    public function updatedCategoryFilter()
    {
        $this->resetPage();
    }

    public function delete($id)
    {
        $project = Project::find($id);
        if ($project) {
            $project->delete();
            session()->flash('message', 'Project deleted successfully.');
        }
    }

    public function render()
    {
        $query = Project::latest();

        if ($this->categoryFilter) {
            $query->where('category', $this->categoryFilter);
        }

        return view('livewire.admin.projects.index', [
            'projects' => $query->paginate(10)
        ]);
    }
}
