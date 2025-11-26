
https://pixelos.net/ dan https://garudalinux.org/ sebagai referensi
### **1. HOME**
- Hero section dengan tagline Project Sleep
- Preview 3 jenis OS: SleepOS (HyperOS), AOSP, Port Rom
- Highlight features utama
- Quick download CTA
- Latest news/updates section

### **2. FEATURES**
- Screenshot gallery fitur-fitur unggulan
- Detail technical specifications
- Comparison antara 3 jenis OS
- Visual showcase dengan animasi smooth

### **3. DOWNLOAD** ⭐ **CORE SYSTEM**
```
Struktur Hierarki:
DOWNLOAD PAGE → Pilih Device → DEVICE PAGE → Pilih ROM
```

**Download Page:**
- Grid device cards dengan foto
- Search bar + Filter (SLEEPOS/AOSP/PORT)
- Auto-generate pages untuk device baru

**Device Page:**
- Device photo & specs
- Available ROMs table:
  - Maintainer
  - Version
  - ROM Type
  - File Size
  - Changelogs
  - Notes
  - Download Button (link external)

### **4. TEAM**
- Team members grid dengan:
  - Photo + Bendera negara
  - Role & kontribusi
- **Apply Form** → Notifikasi ke admin dashboard

### **5. ABOUT**
- Deskripsi Project Sleep & visi misi
- Community links:
  - Telegram Channel: https://t.me/SleepOsUpdate
  - Telegram Group: https://t.me/SleepOsUser  
  - Discord: https://discord.gg/sK433E4jq
  - GitHub: https://github.com/sleep-bugy

## ⚙️ **Fitur Teknis**

### **Admin Dashboard** (PHP Backend)
- **Device Management**: Add/Edit/Delete device + upload photos
- **ROM Management**: Upload ROM (via link), update changelogs, notes
- **Content Management**: Edit semua halaman (text, structure, images)
- **Team Applications**: View apply forms dari halaman team
- **Multi-language Management**: Terjemahan konten

### **User Experience Features**
- **Dark/White Mode**: 
  - Dark: Biru gelap elegan neon (#0a192f, #112240)
  - Light: Biru muda elegan neon (#e6f7ff, #b3e0ff)
- **Multi-language**: 9 bahasa (semua text diterjemahkan kecuali "Project Sleep")
- **Animations**: Framer Motion - smooth, lightweight, subtle transitions

## 🔄 **Technical Flow**

### **Download System Flow:**
```
User → Download Page → Filter/Search → Pilih Device → 
Device Page → Pilih ROM → Download (external link)
```

### **Admin Flow:**
```
Admin Login → Dashboard → 
├── Manage Devices (Add/Edit/Delete)
├── Manage ROMs (Upload links, Changelogs, Notes)  
├── Manage Content (All pages editable)
├── View Team Applications
└── Language Management
```

### **Dynamic Content:**
- Setiap device baru auto-generate page
- ROM data terstruktur dengan maintainer info
- Multi-language content management system

## 🎨 **Design Guidelines**
- **Referensi**: PixelOS (clean) + Garuda Linux (modern)
- **Color Scheme**: Elegant blue neon (tidak mencolok)
- **Typography**: Modern, readable fonts
- **Animations**: Framer Motion untuk smooth page transitions
- **Responsive**: Mobile-first approach

## 📱 **Content Management**
- Semua konten editable via admin dashboard
- Dynamic device pages
- Multi-language support dengan fallback
- Media optimization untuk device photos

Website ini akan menjadi platform comprehensive untuk Project Sleep dengan user experience yang smooth dan admin tools yang powerful untuk management content dan ROM distribution.