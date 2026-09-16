# Aazad Nath Tharu

**Infrastructure & Systems Engineer — CI/CD, Automation, Linux Administration**

Infrastructure Engineer with 6+ years of experience in enterprise system administration, network engineering, and deployment automation. Specializes in configuration management at scale, having automated application updates across a 100+ server fleet using Ansible and CI/CD pipelines, with additional experience in VoIP telephony infrastructure and enterprise network security.

📍 Kathmandu, Nepal &nbsp;|&nbsp; 📧 faazad66@gmail.com &nbsp;|&nbsp; 💼 [LinkedIn](https://linkedin.com/in/aazad-nath-tharu-b0069b197)

---

## Professional Experience Summary

| Area | Contribution |
|---|---|
| **Configuration Management** | Designed and maintained Ansible playbooks to automate application updates across **100+ production servers**, accounting for host-specific configuration variance while ensuring deployment consistency |
| **CI/CD Implementation** | Designed and implemented CI/CD pipelines using Jenkins and GitLab CI/CD to automate build, test, and release workflows, reducing manual deployment effort |
| **Telephony Infrastructure** | Deployed and maintained Asterisk-based VoIP infrastructure for three production SaaS platforms: [Getdesk](https://voxcrow.com/getdesk/), [Ringaze](https://ringaze.com/), and [Buel](https://buel.app/) |
| **Network Engineering** | Implemented and maintained enterprise network infrastructure, including VLAN segmentation, site-to-site and remote-access VPN, and firewall configuration (Cisco, Fortinet, Palo Alto) across multiple branch sites |
| **Virtualization & Disaster Recovery** | Administered VMware ESXi, Hyper-V, and XenServer environments; configured Hyper-V replication for VM-level high availability and disaster recovery |

---

## Repository Overview

This repository contains a self-contained CI/CD and configuration management reference implementation, demonstrating the deployment workflow used in production environments described above.

```
.
├── .github/workflows/
│   └── deploy.yml              # CI/CD pipeline (GitHub Actions, self-hosted runner)
├── ansible/
│   ├── hosts.ini               # Inventory definition
│   └── update.yml              # Deployment playbook with zero-downtime reload
├── gitlab-ci/
│   └── .gitlab-ci.yml          # Equivalent pipeline definition (GitLab CI)
└── nginx/
    └── app-reverse-proxy.conf  # Reverse proxy configuration with upstream health checks
```

**Deployment flow:** commit pushed → pipeline triggered on self-hosted runner → Ansible playbook executes rolling update against inventory → Nginx health check confirms service availability.

### Execution

```bash
# Deploy against the configured inventory
ansible-playbook -i ansible/hosts.ini ansible/update.yml

# Verify service health
curl -I http://127.0.0.1/health
```

---

## Technical Skills

**CI/CD & Automation:** GitHub Actions, GitLab CI/CD, Jenkins, Ansible, Docker, Bash scripting
**Systems Administration:** Linux (RHEL, CentOS, Ubuntu, Debian, Oracle Linux), Windows Server (Active Directory, DNS, DHCP, LDAP)
**Web Infrastructure:** Nginx, Apache — reverse proxy configuration, virtual hosts, SSL/TLS termination
**Networking & Security:** Cisco, Fortinet, Palo Alto, VLAN, VPN, OSPF, EIGRP, TCP/IP
**Virtualization:** VMware ESXi, Hyper-V (replication), XenServer/XenCenter
**Monitoring:** Prometheus, Grafana, Nagios, Zabbix, Cacti
**VoIP Telephony:** Asterisk core configuration, telephony infrastructure, real-time monitoring systems

---

## Certifications & Training

- CCNA Training, 120 hours — Laba Pvt. Ltd.
- Hardware & Networking, 3 months — Milestone Institute Pvt. Ltd.
