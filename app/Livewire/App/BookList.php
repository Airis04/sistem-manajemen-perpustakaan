<?php

namespace App\Livewire\App;

use App\Models\Buku;
use Livewire\Component;
use Livewire\WithPagination;

class BookList extends Component
{
    use WithPagination;

    public string $search = '';

    public int $categoryId = 0;

    public function setCategoryId($id)
    {
        if ($this->categoryId == $id) {
            $this->categoryId = 0;

            return;
        }
        $this->categoryId = $id;
    }

    public function render()
    {
        return view('livewire.app.book-list', [
            'books' => Buku::query()
                ->where('judul_buku', 'like', "%$this->search%")
                ->when($this->categoryId != 0, function ($query) {
                    return $query->whereHas('kategori', function ($query) {
                        $query->where('kategori.id', $this->categoryId);
                    });
                })
                ->latest('buku.id')
                ->paginate(),
            'categories' => \App\Models\Kategori::query()
                ->limit(8)
                ->latest()
                ->get(),
        ]);
    }
}
