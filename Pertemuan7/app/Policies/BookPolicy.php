<?php

namespace App\Policies;

use App\Models\Book;
use App\Models\User;

class BookPolicy
{
    public function viewAny(User $user): bool
    {
        return true; // Semua role bisa melihat daftar buku
    }

    public function view(User $user, Book $book): bool
    {
        return true; // Semua role bisa melihat detail buku
    }

    public function create(User $user): bool
    {
        return in_array($user->role, ['admin', 'staff']);
    }

    public function update(User $user, Book $book): bool
    {
        return in_array($user->role, ['admin', 'staff']);
    }

    public function delete(User $user, Book $book): bool
    {
        return $user->role === 'admin';
    }

    public function restore(User $user, Book $book): bool
    {
        return $user->role === 'admin';
    }

    public function forceDelete(User $user, Book $book): bool
    {
        return $user->role === 'admin';
    }
}