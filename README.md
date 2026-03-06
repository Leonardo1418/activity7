# Activity 7

## Project Description
A management system platform for a small robotics school. This system allows the administration of users (Students, Teachers, and Admins), groups, courses, and robotics kits.

## ER Diagram
```mermaid
erDiagram
    KIT {
        bigint id PK
        string name
        timestamp created_at
        timestamp updated_at
    }
    
    GROUP {
        bigint id PK
        string name "beginner, intermediate, advanced"
        timestamp created_at
        timestamp updated_at
    }
    
    USER {
        bigint id PK
        string name
        string email
        string password
        string role "student, teacher, admin"
        bigint group_id FK "nullable"
        timestamp created_at
        timestamp updated_at
    }
    
    COURSE {
        bigint id PK
        string course_key
        string name
        string cover
        text content
        string didactic_material
        bigint kit_id FK
        timestamp created_at
        timestamp updated_at
    }
    
    COURSE_GROUP {
        bigint id PK
        bigint group_id FK
        bigint course_id FK
        timestamp created_at
        timestamp updated_at
    }

    KIT ||--o{ COURSE : "has many"
    GROUP ||--o{ USER : "has many (students)"
    GROUP ||--o{ COURSE_GROUP : "belongs to"
    COURSE ||--o{ COURSE_GROUP : "belongs to"
