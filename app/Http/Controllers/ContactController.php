<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Menampilkan daftar kontak
    public function index()
    {
        $contacts = Contact::all(); // Ambil semua data kontak
        return view('contacts.index', compact('contacts'));
    }

    // Menampilkan form untuk menambah kontak
    public function create()
    {
        return view('contacts.create');
    }

    // Menyimpan kontak baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        Contact::create($request->all());
        return redirect()->route('contacts.index')->with('success', 'Kontak berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit kontak
    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }

    // Memperbarui kontak
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        $contact = Contact::findOrFail($id);
        $contact->update($request->all());
        return redirect()->route('contacts.index')->with('success', 'Kontak berhasil diperbarui.');
    }

    // Menghapus kontak
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect()->route('contacts.index')->with('success', 'Kontak berhasil dihapus.');
    }
}
