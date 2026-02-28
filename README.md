Project Documentation — Bank Statement PDF Entry Tool

1. Project Overview
   The system allows an admin/user to upload a bank statement PDF, enter additional transaction data, and generate a new PDF output with the new entries added visually without altering the original layout.
   This tool is designed for structured entry insertion, not full PDF editing.

2. Objectives
   Upload bank statement PDFs

Add user-defined entries for specific dates (e.g., monthly entries)

Generate a new PDF with the added entries

Preserve original statement layout and formatting

Maintain PDF integrity to pass validation tools (e.g., DocuClipper)

3. Core Workflow
   Step 1 — Upload Statement PDF
   User uploads a bank statement PDF (SBI, HDFC, Kotak, etc.)
   System stores:
   Original PDF file

Bank type (detected or selected)

Upload metadata

Step 2 — Input Entry Data
User/admin enters required fields:
Entry Date(s)

Amount

Description

Additional custom fields (client-defined)

Step 3 — Insert Entry Into Statement
System adds the entry into the PDF using overlay/stamping logic:
No layout shifting

No table regeneration

No modification of original content objects

Step 4 — Generate Output PDF
System produces a new PDF:
Original statement remains visually unchanged

New entries appear in correct date position

Output is saved and downloadable

4. Supported PDF Editing Scope
   Supported Features ✅
   Add new text entries at fixed locations

Add monthly recurring entries

Add overlays without changing existing content

Generate updated PDF output

Not Supported ❌
Editing or removing existing statement text

Reflowing PDF layout like Word documents

Supporting unknown/random statement formats automatically

Guaranteeing byte-level identical PDF internals

5. Multi-Bank Support Strategy
   Since each bank has a different PDF layout, the system will use separate processing modules:
   SbiStatementService

HdfcStatementService

KotakStatementService

Each service defines:
Layout rules

Entry placement coordinates

Format/version handling

6. Bank Statement Template Scope
   Phase 1 Supported Banks (Example)
   SBI Netbanking PDF Format v1

HDFC Netbanking PDF Format v1

Any additional bank or format version will be treated as a paid extension.

7. PDF Integrity & Compliance Notes
   The system will preserve:
   Visual layout

Original content positioning

Statement readability

However:
PDF metadata fields (timestamps, producer info) may change

Internal PDF structure may be updated during stamping

DocuClipper compatibility must be verified during implementation.
If strict compliance is required, paid SDK solutions may be needed.

8. Technical Stack
   Backend
   Laravel (Core application)

PDF Processing
FPDI (PDF import + overlay)

TCPDF/FPDF (text stamping)

Optional: QPDF/Ghostscript for advanced operations

Storage
Local/S3 storage for PDFs

Background Jobs (Recommended)
Laravel Queues for PDF processing

9. Deliverables
   PDF Upload Module

Admin Entry Input Dashboard

Bank-wise Statement Processing Services

Output PDF Generator

Download + Audit Logs

10. Risks & Assumptions
    Risks
    Bank formats may change over time

Different statement layouts require new service modules

Some PDFs may be scanned/image-based (OCR required)

Assumptions
Supported PDFs are text-based, not scanned

Client provides sample PDFs for each supported bank format

11. Phase-Based Development Plan
    Phase 1 (MVP)
    Support 1–2 banks

Fixed entry stamping

Output PDF generation

Phase 2
Add more banks/templates

Template detection automation

Phase 3 (Optional)
OCR support for scanned statements

Paid SDK integration if compliance demands
